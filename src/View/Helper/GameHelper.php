<?php
namespace App\View\Helper;

use Cake\View\Helper;

class GameHelper extends Helper
{
    public $helpers = ['Html'];

    /**
     * Initialize function
     *
     * @param array $config Configuration
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    /**
     * Increments the amount of time spent
     *
     * @param int $periods Periods
     */
    public function spendTime($periods = 1)
    {
        $period1 = $this->request->cookies->read('time.period1');
        $period1 += $periods;
        $this->request->cookies->write('time.period1', $period1);
    }

    /**
     * Increments the amount of time available
     *
     * @param int $count Number of passes
     */
    public function addPasses($count = 1)
    {
        $period2 = $this->request->cookies->read('time.period2');
        $period2 += $count;
        $this->request->cookies->write('time.period2', $period2);
    }

    /**
     * Decrements the amount of time available
     *
     * @param int $count Number of passes
     */
    public function removePasses($count = 1)
    {
        $period2 = $this->request->cookies->read('time.period2');
        $period2 -= $count;
        $this->request->cookies->write('time.period2', $period2);
    }

    /**
     * Returns a link to go back out into the hallway
     *
     * @param int $floor Floor
     * @return string
     */
    public function hallwayLink($floor)
    {
        if ($floor == 1) {
            $action = 'first';
        } elseif ($floor == 2) {
            $action = 'second';
        } else {
            throw new \InvalidArgumentException('Unrecognized floor: ' . $floor);
        }

        return $this->Html->link(
            'Go back out into the hallway',
            [
                'controller' => 'Floors',
                'action' => $action
            ],
            ['class' => 'btn btn-default']
        );
    }
}
