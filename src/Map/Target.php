<?php
namespace App\Map;

class Target
{
    public $coords;
    public $shortName;
    public $longName;
    public $move;

    /**
     * Construct method
     *
     * @param string $coords The coordinates in the imagemap
     * @param string|null $shortName The short name, matching a method name in RoomsController
     * @param string $longName A longer name, used in HTML 'title' attributes
     * @param null|string $move Optional, if a non-default move (action) is being conducted in a room
     * @return void
     */
    public function __construct($coords, $shortName, $longName, $move = null)
    {
        $this->coords = $coords;
        $this->shortName = $shortName;
        $this->longName = $longName;
        $this->move = $move;
    }
}