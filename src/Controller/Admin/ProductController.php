<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class ProductController extends AppController {
    
      public function initialize()
    {
        $this->loadModel('Product');

        parent::initialize();
    }


  public function product() { 
    $data = $this->Product->find()->where(['status' => 1])->all()->toArray();
    $this->set('data', $data);
  }

  public function add () {
    if ($this->request->is('post')) {
      $productTable = TableRegistry::get('Product');
      $product = $productTable->newEntity();
      $data = $this->request->data;
      $product->name = $data['name'];
      $product->note = $data['note'];
      $product->price = $data['price'];
      if ($productTable->save($product)) {
        $id = $product->id;
        $this->redirect(['action' => 'product']);
      }
    }
  }

  public function edit () {
    $id = $this->request->params['id'];
    $productTable = TableRegistry::get('Product');
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
    $id = $this->request->params['id'];
    $productTable = TableRegistry::get('Product');
    $product = $productTable->get($id);
    $product->status = 0;
    $product->id = $id;
    $productTable->save($product);
    $this->redirect(['action' => 'product']);
  }
}
