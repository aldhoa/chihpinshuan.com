<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\Event\Event;

class AdminController extends AppController {
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Csrf', [
            'cookieName' => 'ecToken',
            'secure' => true
            ]);

        $this->loadComponent('Auth', [
            'loginAction' => [
            'controller' => 'user',
            'action' => 'login'
            ],
            'loginRedirect' => [
            'controller' => 'Product',
            'action' => 'product'
            ],
            'logoutRedirect' => [
            'controller' => 'user',
            'action' => 'login'
            ]]);
    }

    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->allow(['login','add']);
       $this->Auth->config('authenticate', [
            'Form' => [
                        'userModel' => 'User',
                        'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ],
                    'passwordHasher' => [
                        'className' => 'Legacy',
                    ]
                ]
            ]);
      $this->eventManager()->off($this->Csrf);
    }

}
