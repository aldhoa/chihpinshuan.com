<?php
namespace App\Controller\Admin;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class UserController extends AdminController {


   public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->set('login_error_msg', __('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}
