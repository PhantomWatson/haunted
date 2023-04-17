<?php
namespace App\Controller;

use App\Controller\Component\GameComponent;
use Cake\Controller\Controller;
use Cake\Http\Cookie\Cookie;
use DateTime;

/**
 * Application Controller
 *
 * @property GameComponent $Game
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
     * @throws \Exception
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Game');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     * @throws \Exception
     */
    public function beforeRender(\Cake\Event\EventInterface $event)
    {
        if (!$this->viewBuilder()->getVar('_serialize') &&
            in_array($this->response->getType(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        $this->Game->setLayoutVariables();

        return parent::beforeRender($event);
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        $timeSpent = $this->request->query('ts');
        if ($timeSpent) {
            $period1 = $this->request->getCookie('time.period1', 0);
            $period1 += $timeSpent;

            $cookie = (new Cookie('time.period1'))
                ->withValue($period1)
                ->withExpiry(new DateTime('+1 year'))
                ->withSecure(false)
            ;
            $this->setResponse($this->response->withCookie($cookie));
        }

        if ($this->Game->checkLose() && ! in_array($this->request->getParam('action'), ['lose', 'restart', 'home'])) {
            $this->redirect([
                'controller' => 'Pages',
                'action' => 'lose'
            ]);
        }

        return parent::beforeFilter($event);
    }
}
