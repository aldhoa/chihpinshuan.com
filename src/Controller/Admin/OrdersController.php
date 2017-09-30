<?php
namespace App\Controller\Admin;
use Cake\ORM\TableRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Event\Event;
use Cake\Utility\Text;

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
    // if ($this->request->is('post')) {
    //   $productTable = TableRegistry::get('Product');
    //   $product = $productTable->newEntity();
    //   $data = $this->request->data;
    //   $product->name = $data['name'];
    //   $product->note = $data['note'];
    //   $product->price = $data['price'];
    //   if ($productTable->save($product)) {
    //     $id = $product->id;
    //     $this->redirect(['action' => 'product']);
    //   }
    // }
  }

  public function orderDetail () {
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
    $orderTable = TableRegistry::get('Orders');
    $order = $orderTable->get($id);
    $order->status = 0;
    $order->id = $id;
    $orderTable->save($order);
    $this->redirect(['action' => 'orders']);
  }

  public function showOrderDetail(){
    $this->viewBuilder()->setLayout(false);
    $data = [];
    if($this->request->is('get')){
      $id = !empty($this->request->query['id']) ? trim($this->request->query['id']) : '';
      if(!empty($id)){
        $OrderDetail = TableRegistry::get('OrderDetail');
        $join = [
          'pr' => [
            'table' => 'product',
            'type' => 'inner',
            'conditions' => 'pr.id=OrderDetail.id_product'
          ]
        ];
        $data = $OrderDetail->find()->select(['pr.name','OrderDetail.price','OrderDetail.quantity'])->where(['id_order' => $id])->join($join)->toArray();
      }
    }
    $this->set(compact('data'));
  }
}
