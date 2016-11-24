<?php
namespace App\Map;

use Cake\Routing\Router;

class Map
{
    /**
     * @var array Array of Target objects
     */
    public $targets;

    /**
     * Constructor
     *
     * @return void
     */
    public function construct() {
        $this->targets = [];
    }

    /**
     * Adds a target object to this map's collection
     *
     * @param string $coords The coordinates in the imagemap
     * @param string $shortName The short name, matching a method name in RoomsController
     * @param string $longName A longer name, used in HTML 'title' attributes
     * @param null|string $action Optional, if a non-default action is being conducted in a room
     * @return void
     */
    public function addTarget($coords, $shortName, $longName, $action = null)
    {
        $this->targets[] = new Target($coords, $shortName, $longName, $action);
    }

    /**
     * Returns the <area> tags used in the imagemap
     *
     * @return string
     */
    public function getAreaTags()
    {
        $retval = [];
        foreach ($this->targets as $target) {
            $url = [
                'controller' => 'Rooms',
                'action' => $target->shortName
            ];
            if ($target->action) {
                $url[] = $target->action;
            }
            $coordCount = count(explode(',', $target->coords));
            $shape = ($coordCount == 4) ? 'rect' : 'poly';
            $area = '<area ' .
                'shape="' . $shape . '" ' .
                'coords="' . $target->coords . '" ' .
                'href="' . Router::url($url) . '" ' .
                'title="' . $target->longName . '">';
            $retval[] = $area;
        }
        return implode("\n", $retval);
    }
}