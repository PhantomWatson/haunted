<?php
namespace App\View\Helper;

use Cake\Network\Exception\InternalErrorException;
use Cake\View\Helper;

class GameHelper extends Helper
{
    public $helpers = ['Html'];
    public $cookie;

    /**
     * Initialize function
     *
     * @param array $config Configuration
     */
    public function initialize(array $config)
    {
        $this->cookie = $this->_View->get('cookie');
        parent::initialize($config);
    }

    /**
     * Increments the amount of time spent
     *
     * @param int $periods Periods
     */
    public function spendTime($periods = 1)
    {
        $period1 = $this->cookie->read('time.period1');
        $period1 += $periods;
        $this->cookie->write('time.period1', $period1);
    }

    /**
     * Increments the amount of time available
     *
     * @param int $count Number of passes
     */
    public function addPasses($count = 1)
    {
        $period2 = $this->cookie->read('time.period2');
        $period2 += $count;
        $this->cookie->write('time.period2', $period2);
    }

    /**
     * Decrements the amount of time available
     *
     * @param int $count Number of passes
     */
    public function removePasses($count = 1)
    {
        $period2 = $this->cookie->read('time.period2');
        $period2 -= $count;
        $this->cookie->write('time.period2', $period2);
    }

    /**
     * Returns a link to go back out into the hallway
     *
     * @param string $label Button label
     * @param int $spendTime How much "time spent" should be incremented
     * @return string
     */
    public function hallwayLink($label = null, $spendTime = 0)
    {
        $floor = $this->_View->get('floor');
        if (! $floor) {
            throw new InternalErrorException('Floor unknown');
        }
        if ($floor == 1) {
            $action = 'first';
        } elseif ($floor == 2) {
            $action = 'second';
        } else {
            throw new \InvalidArgumentException('Unrecognized floor: ' . $floor);
        }

        if (! $label) {
            $label = 'Go back out into the hallway';
        }
        $url = [
            'controller' => 'Floors',
            'action' => $action
        ];
        if ($spendTime) {
            $url['?'] = ['ts' => $spendTime];
        }
        return $this->link(
            $label,
            $url
        );
    }

    /**
     * Returns a game action link with special formatting
     *
     * @param string $label Label
     * @param array $url URL array
     * @return string
     */
    public function link($label, $url)
    {
        if (! isset($url['floor'])) {
            $url['floor'] = $this->_View->get('floor');
        }
        if (! isset($url['room'])) {
            $url['room'] = $this->_View->get('room');
        }

        return
            '<div class="btn-container">' .
            $this->Html->link(
                $label,
                $url,
                ['class' => 'btn btn-lg btn-default']
            ) .
            '</div>';
    }

    /**
     * Records a quest as having been completed
     *
     * @param string $quest Quest identifier
     */
    public function completeQuest($quest)
    {
        $quests = $this->cookie->read('quests');
        $quests .= $quest;
        $this->cookie->write('quests', $quests);
    }
}
