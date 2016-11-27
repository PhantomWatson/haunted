<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Model\Entity\Player;
use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie', [
            'expiry' => '1 year',
            'encryption' => false
        ]);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        $this->setLayoutVariables();

        return parent::beforeRender($event);
    }

    public function beforeFilter(Event $event)
    {
        if ($this->checkLose()) {
            $this->redirect([
                'controller' => 'Pages',
                'action' => 'lose'
            ]);
        }

        return parent::beforeFilter($event);
    }

    /**
     * Returns a Player entity or null if none has been saved
     *
     * @return null|Player
     */
    public function getPlayer()
    {
        $this->loadModel('Players');
        $player = $this->Cookie->read('player');
        return $player ? $this->Players->newEntity($player) : null;
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
        $this->loadComponent('Cookie');

        // GPA
        $gpa = $this->Cookie->read('player.gpa');
        $displayedGpas = [
            5 => "4.0",
            4 => "3.9-3.0",
            3 => "2.9-2.0",
            2 => "1.9-1.0",
            1 => "0.9-0.1",
            0 => "0.0"
        ];
        $gpaDisplayed = $gpa ? $displayedGpas[$gpa] : null;

        // Player title
        $sex = $this->Cookie->read('player.sex');
        $name = $this->Cookie->read('player.name');
        $quests = $this->Cookie->read('quests');
        $title = "";
        foreach (['c', '2', 'd', '5', '6', '7', '8'] as $quest) {
            if (strstr($quests, $quest)) {
                $title .= "The";
                break;
            }
        }
        if (strstr($quests, "c") ) {
            $title .= " Shameful";
        }
        if (strstr($quests, "2") || strstr($quests, "d") ) {
            $title .= " Heroic";
        }
        if (strstr($quests, "7") ) {
            $title .= " Patriot";
        }
        if (strstr($quests, "0") ) {
            $title .= " Savior";
        }
        if (strstr($quests, "6") ) {
            $title .= " Pirate";
        }
        if (strstr($quests, "5")) {
            $title .= ($sex == "f") ? " Empress" : " Emperor";
        }
        foreach (['c', '2', 'd', '5', '6', '7', '8'] as $quest) {
            if (strstr($quests, $quest)) {
                $title .= ", ";
                break;
            }
        }

        // Time remaining
        $period1 = $this->Cookie->read('time.period1');
        $period2 = $this->Cookie->read('time.period2');
        if ($period2) {
            $percentTimeRemaining = ($period1 / $period2) * 100;
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
                100 => '#D451FF'
            ];
            foreach ($colors as $percent => $color) {
                if ($percentTimeRemaining < $percent) {
                    $timeRemainingColor = $color;
                    break;
                }
            }
        } else {
            $timeRemainingColor = null;
        }

        $this->set([
            'debugMode' => ($name == 'Mr. Cauliflower' || strstr($quests, 'z')),
            'gpa' => $gpa,
            'gpaDisplayed' => $gpaDisplayed,
            'name' => $name,
            'period1' => $period1,
            'period2' => $period2,
            'playerTitle' => $title,
            'quests' => $quests,
            'sex' => $sex,
            'timeRemainingColor' => $timeRemainingColor
        ]);
    }

    public function initializeGame($player)
    {
        $this->clearGameData();
        $this->savePlayer($player);
        $this->Cookie->write('time.period1', 1);
        $this->Cookie->write('time.period2', 13);
    }

    public function clearGameData()
    {
        $this->Cookie->delete('player');
        $this->Cookie->delete('time');
        $this->Cookie->delete('quests');
    }
}
