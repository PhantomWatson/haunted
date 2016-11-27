<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Filesystem\Folder;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class RoomsController extends AppController
{
    /**
     * Displays a room
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function room()
    {
        $args = func_get_args();
        $floor = isset($args[0]) ? $args[0] : null;
        $room = isset($args[1]) ? $args[1] : null;
        $action = isset($args[2]) ? $args[2] : null;

        if (! $room) {
            return $this->redirect([
                'controller' => 'Floors',
                'action' => ($floor == 2 ? 'second' : 'first')
            ]);
        }

        // Convert e.g. 'room123' to '123'
        if (substr('room', 0, 4) == 'room') {
            $room = substr($room, 4);
        }

        // Default to a random generic room if a specific room template isn't available
        $dir = new Folder(APP . 'Template' . DS . 'Rooms');
        if (! $dir->find("$room.ctp")) {
            $room = 'generic' . $floor . '_' . rand(1, 5);
        }

        $this->set('action', $action);
        return $this->render($room);
    }
}
