<?php
namespace App\Controller;

use App\Controller\Component\GameComponent;
use Cake\Controller\Controller;
use Cake\Event\EventInterface;
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
        $timeSpent = $this->request->getQuery('ts');
        if ($timeSpent) {
            $period1 = $this->request->getCookie('time_period1', 0);
            $period1 += $timeSpent;

            $this->setCookie('time_period1', $period1);
        }

        if ($this->Game->checkLose() && ! in_array($this->request->getParam('action'), ['lose', 'restart', 'home'])) {
            $this->redirect([
                'controller' => 'Pages',
                'action' => 'lose'
            ]);
        }

        return parent::beforeFilter($event);
    }

    private function setCookie($key, $val)
    {
        $cookie = (new Cookie($key))
            ->withValue((string) $val)
            ->withExpiry(new DateTime('+1 year'))
            ->withSecure(false)
        ;
        $this->setResponse($this->response->withCookie($cookie));
    }

    public function afterFilter(EventInterface $event)
    {
        $session = $this->getRequest()->getSession();

        // Move cookieWriteQueue into cookie data
        $cookieWriteQueue = $session->read('cookieWriteQueue');
        if ($cookieWriteQueue) {
            foreach ($cookieWriteQueue as $key => $val) {
                $this->setCookie($key, $val);
            }
        }
        $session->delete('cookieWriteQueue');
    }
}
