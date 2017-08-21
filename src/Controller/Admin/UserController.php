<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class UserController extends AppController {
    
      public function initialize()
    {
        $this->loadModel('User');
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
          'loginAction' => [
            'controller' => 'user',
            'action' => 'login'
            ],
            'loginRedirect' => [
                'controller' => 'product',
                'action' => 'product'
            ],
            'logoutRedirect' => [
                'controller' => 'user',
                'action' => 'logout'
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
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
    }


   public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}
