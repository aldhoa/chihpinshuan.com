<?php
namespace App\Controller\Admin;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class OrdersController extends AdminController {
    
  public function initialize() {
    $this->loadModel('Orders');
    parent::initialize();
  }

  public function orders() {
    $data = $this->Orders->find()->where(['status' => 1])->all()->toArray();
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

  public function orderDetail () {
    echo 1;die;
    $id = $this->request->params['id'];
    $ordersTable = TableRegistry::get('Orders');
    $orderDetail = $orderDetail->get($id)->toArray();

    if ($this->request->is('post')) {
      $product = $productTable->newEntity();
      $data = $this->request->data;
      $product->id = $id;
      $product->name = $data['name'];
      $product->note = $data['note'];
      $product->price = $data['price'];

      if ($productTable->save($orderDetail)) {
        $id = $orderDetail->id;
        $this->redirect(['action' => 'orders']);
      }
    }
    $this->set('value', $orderDetail);
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
