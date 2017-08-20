<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class AdminController extends AppController {

  public function product() { 
    $this->loadModel('Admin'); 
    $this->set('title', 'Cripy Pork Jerky');
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
        // The $article entity contains the id now
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

    public function login () {
    $this->loadModel('Admin'); 
    $this->set('title', 'Cripy Pork Jerky');
    $data = $this->Admin->find()->where(['status' => 1])->all()->toArray();
    $this->set('data', $data);
  }
}
