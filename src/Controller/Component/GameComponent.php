<?php
namespace App\Controller\Component;

use App\Model\Entity\Player;
use Cake\Controller\Component;
use Cake\Datasource\EntityInterface;
use Cake\ORM\TableRegistry;

class GameComponent extends Component
{
    const PERIOD1 = 'period1';
    const PERIOD2 = 'period2';
    const PLAYER = 'player';
    const TIME = 'time';
    const QUESTS = 'quests';
    const GAME = 'game';
    const CLEARED_ROOMS = 'cleared-rooms';
    const GPA = 'gpa';
    const SEX = 'sex';
    const NAME = 'name';
    const BLY_ANSWERS = 'blyanswers';

    /**
     * Initialize method
     *
     * @param array $config Configuration
     */
    public function initialize(array $config): void
    {

    }

    public function startGame($player)
    {
        $this->clearGameData();
        $this->write(self::PLAYER, $player->toArray());
        $this->write(self::TIME, [
            self::PERIOD1 => 1,
            self::PERIOD2 => 13,
        ]);
    }

    public function clearGameData()
    {
        $this->getSession()->clear();
    }

    /**
     * Returns a boolean indicating whether the player has lost the game
     *
     * @return bool
     */
    public function checkLose()
    {
        $time = $this->getTime();
        if ($time[self::PERIOD1] && $time[self::PERIOD2] && ($time[self::PERIOD1] / $time[self::PERIOD2]) >= 1) {
            return true;
        }
        return false;
    }

    private function getTime()
    {
        $time = $this->read(self::TIME);

        return [
            self::PERIOD1 => $time ? (int) $time[self::PERIOD1] : 0,
            self::PERIOD2 => $time ? (int) $time[self::PERIOD2] : 0,
        ];
    }

    public function setLayoutVariables()
    {
        // GPA
        $player = $this->read(self::PLAYER);
        $gpa = $player[self::GPA] ?? null;
        $displayedGpas = [
            5 => '4.0',
            4 => '3.5',
            3 => '2.5',
            2 => '1.5',
            1 => '0.5',
            0 => '0.0'
        ];
        $gpaDisplayed = $displayedGpas[$gpa] ?? null;

        // Player title
        $sex = $player[self::SEX] ?? null;
        $name = $player[self::NAME] ?? null;
        $quests = $this->read(self::QUESTS);
        $playersTable = TableRegistry::get('Players');
        $title = $playersTable->getTitle($quests, $sex);

        // Time remaining
        $time = $this->getTime();
        $period1 = $time[self::PERIOD1] ?? 0;
        $period2 = $time[self::PERIOD2] ?? 0;
        if ($period2) {
            $timeRemainingPercent = ($period1 / $period2) * 100;
            $timeRemainingPercent = min($timeRemainingPercent, 100);
            $colors = [
                10 => '#24FF19',
                20 => '#65FF19',
                30 => '#ABFF19',
                40 => '#E7FF19',
                50 => '#FFD619',
                60 => '#FFA619',
                70 => '#FF5F19',
                80 => '#FF1919',
                90 => '#D4003C',
                101 => '#D451FF'
            ];
            foreach ($colors as $percent => $color) {
                if ($timeRemainingPercent < $percent) {
                    $timeRemainingColor = $color;
                    break;
                }
            }
        } else {
            $timeRemainingColor = null;
            $timeRemainingPercent = null;
        }

        // Floor
        if ($this->controllerIs('Floors')) {
            if ($this->actionIs('first')) {
                $floor = 1;
            } elseif ($this->actionIs('second')) {
                $floor = 2;
            } else {
                $floor = 99;
            }
        } elseif ($this->controllerIs('Rooms')) {
            $floor = $this->getController()->getRequest()->getParam('floor') ?? 88;
        } else {
            $floor = 77;
        }

        $room = $this->getController()->getRequest()->getParam('room');

        $this->getController()->set([
            'debugMode' => ($name == 'Mr. Cauliflower' || ($quests && strstr($quests, 'z'))),
            'floor' => $floor,
            'gpa' => $gpa,
            'gpaDisplayed' => $gpaDisplayed,
            'name' => $name,
            'period1' => $period1,
            'period2' => $period2,
            'playerTitle' => $title,
            'quests' => $quests,
            'room' => $room,
            'sex' => $sex,
            'timeRemaining' => [
                'color' => $timeRemainingColor,
                'percent' => $timeRemainingPercent
            ]
        ]);
    }

    private function controllerIs($val): bool
    {
        return $this->getController()->getRequest()->getParam('controller') == $val;
    }

    private function actionIs($val): bool
    {
        return $this->getController()->getRequest()->getParam('action') == $val;
    }

    /**
     * Returns a Player entity or null if none has been saved
     *
     * @return EntityInterface|Player|null
     */
    public function getPlayer()
    {
        $playersTable = TableRegistry::get('Players');
        $player = $this->read(self::PLAYER);
        return $player ? $playersTable->newEntity($player) : null;
    }

    /**
     * Returns true if a room has been cleared
     *
     * @param string $room Room identifier
     * @return bool
     */
    public function roomIsCleared($room)
    {
        $clearedRooms = $this->read(self::CLEARED_ROOMS);
        return $clearedRooms ? array_key_exists($room, $clearedRooms) : false;
    }

    private function getSession()
    {
        return $this->getController()->getRequest()->getSession();
    }

    public function write($key, $val)
    {
        $this->getSession()->write($key, $val);
    }

    private function delete($key)
    {
        $this->getSession()->delete($key);
    }

    public function read($key)
    {
        return $this->getSession()->read($key);
    }
}
