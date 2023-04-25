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
    const COOKIE_WRITE_QUEUE = 'cookieWriteQueue';
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
            $this->spendTime($timeSpent);
        }

        if ($this->Game->checkLose() && ! in_array($this->request->getParam('action'), ['lose', 'restart', 'home'])) {
            $this->redirect([
                'controller' => 'Pages',
                'action' => 'lose'
            ]);
        }

        return parent::beforeFilter($event);
    }

    private function spendTime($timeSpent)
    {
        $time = $this->request->getCookie(GameComponent::TIME);
        $period1 = $time ? $time[GameComponent::PERIOD1] : 0;
        $period1 += $timeSpent;

        $time[GameComponent::PERIOD1] = $period1;
        $this->setCookie(GameComponent::TIME, $time);
    }

    private function setCookie($key, $val)
    {
        $cookie = (new Cookie($key))
            ->withValue(json_encode($val))
            ->withExpiry(new DateTime('+1 year'))
            ->withSecure(false)
        ;
        $this->setResponse($this->response->withCookie($cookie));
    }

    public function afterFilter(EventInterface $event)
    {
        $session = $this->getRequest()->getSession();

        // Move cookieWriteQueue into cookie data
        $cookieWriteQueue = $session->read(self::COOKIE_WRITE_QUEUE);
        if ($cookieWriteQueue) {
            foreach ($cookieWriteQueue as $key => $val) {
                $this->setCookie($key, $val);
            }
        }
        $session->delete(self::COOKIE_WRITE_QUEUE);
    }
}
