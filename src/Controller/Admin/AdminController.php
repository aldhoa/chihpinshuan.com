<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class AdminController extends AppController {
    
      public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Admin',
                'action' => 'product'
            ],
            'logoutRedirect' => [
                'controller' => 'Admin',
                'action' => 'logout'
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'display']);
    }


  // public function login () {
  //   if ($this->request->is('post')) {
  //     $this->loadModel('Admin');
  //     $username = $this->request->params['username'];
  //     $passwork = $this->request->params['passwork'];

  //   }
  // }

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

  public function product() { 
    $this->loadModel('Admin');
    $data = $this->Admin->find()->where(['status' => 1])->all()->toArray();
    $this->set('data', $data);
  }

  public function add () {
    $this->loadModel('Admin');
    if ($this->request->is('post')) {
      $adminTable = TableRegistry::get('Admin');
      $product = $adminTable->newEntity();
      $data = $this->request->data;
      $product->name = $data['name'];
      $product->note = $data['note'];
      $product->price = $data['price'];
      if ($adminTable->save($product)) {
        $id = $product->id;
      }
    }
  }

  public function edit () {
    $this->loadModel('Admin');
    $id = $this->request->params['id'];
    $productTable = TableRegistry::get('Admin');
    $product = $productTable->get($id)->toArray();

    if ($this->request->is('post')) {
      $product = $productTable->newEntity();
      $data = $this->request->data;
      $product->id = $id;
      $product->name = $data['name'];
      $product->note = $data['note'];
      $product->price = $data['price'];

      if ($productTable->save($product)) {
        $id = $product->id;
        $this->redirect(['action' => 'product']);
      }
    }
    $this->set('value', $product);
  }

  public function delete () {
    $this->loadModel('Admin');
    $id = $this->request->params['id'];
    $productTable = TableRegistry::get('Admin');
    $product = $productTable->get($id);
    $product->status = 0;
    $product->id = $id;
    $productTable->save($product);
    $this->redirect(['action' => 'product']);
  }
}
