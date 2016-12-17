<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class GameComponent extends Component
{
    public $components = ['Cookie'];

    /**
     * Initialize method
     *
     * @param array $config Configuration
     */
    public function initialize(array $config)
    {

    }

    public function startGame($player)
    {
        $this->clearGameData();
        $this->savePlayer($player);
        $this->Cookie->write('time.period1', 1);
        $this->Cookie->write('time.period2', 1399);
    }

    public function clearGameData()
    {
        $this->Cookie->delete('player');
        $this->Cookie->delete('time');
        $this->Cookie->delete('quests');
        $this->Cookie->delete('game');
        $this->Cookie->delete('cleared-rooms');
    }

    /**
     * Saves player data
     *
     * @param Player $player
     */
    public function savePlayer($player)
    {
        $this->Cookie->write('player', $player->toArray());
    }

    /**
     * Returns a boolean indicating whether the player has lost the game
     *
     * @return bool
     */
    public function checkLose()
    {
        $period1 = $this->Cookie->read('time.period1');
        $period2 = $this->Cookie->read('time.period2');
        if ($period1 && $period2 && ($period1 / $period2) >= 1) {
            return true;
        }
        return false;
    }

    public function setLayoutVariables()
    {
        // GPA
        $gpa = $this->Cookie->read('player.gpa');
        $displayedGpas = [
            5 => "4.0",
            4 => "3.5",
            3 => "2.5",
            2 => "1.5",
            1 => "0.5",
            0 => "0.0"
        ];
        $gpaDisplayed = $gpa !== NULL ? $displayedGpas[$gpa] : null;

        // Player title
        $sex = $this->Cookie->read('player.sex');
        $name = $this->Cookie->read('player.name');
        $quests = $this->Cookie->read('quests');
        $playersTable = TableRegistry::get('Players');
        $title = $playersTable->getTitle($quests, $sex);

        // Time remaining
        $period1 = $this->Cookie->read('time.period1');
        $period2 = $this->Cookie->read('time.period2');
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
        if ($this->request->controller == 'Floors') {
            if ($this->request->action == 'first') {
                $floor = 1;
            } elseif ($this->request->action == 'second') {
                $floor = 2;
            } else {
                $floor = 99;
            }
        } elseif ($this->request->controller == 'Rooms') {
            if (isset($this->request->params['pass'][0])) {
                $floor = $this->request->params['pass'][0];
            } else {
                $floor = 88;
            }
        } else {
            $floor = 77;
        }

        $room = isset($this->request->params['pass'][1]) ? $this->request->params['pass'][1] : null;

        $this->_registry->getController()->set([
            'debugMode' => ($name == 'Mr. Cauliflower' || strstr($quests, 'z')),
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

    /**
     * Returns a Player entity or null if none has been saved
     *
     * @return null|Player
     */
    public function getPlayer()
    {
        $playersTable = TableRegistry::get('Players');
        $player = $this->Cookie->read('player');
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
        return (bool)$this->Cookie->read("cleared-rooms.$room");
    }
}
