<?php
namespace App\Controller\Web;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Mailer\Email;
use Cake\ORM\TableRegistry;


class ProductController extends AppController
{
  protected $_session;
	public function initialize()
    {
        parent::initialize();
        $this->loadModel('Product');
        $this->loadModel('ProductType');
        $this->loadModel('Orders');
        $this->loadModel('User');
        $this->viewBuilder()->setLayout('web');
        $products = $this->Product->find()->all()->toArray();
        $this->set(compact('products'));
        $this->_session = $this->request->session();
    }

   public function index(){
    
   }


   // public function media(){
    
   // }

   public function prodtype(){

     // $this->_session->destroy();
    $products = $this->Product->find()->all()->toArray();
    $this->set(compact('products'));

   }

   public function orderinfo(){
    $products = $this->Product->find()->all()->toArray();
    $this->set(compact('products'));
   }

   public function contact(){
    if($this->request->is('POST')){
      $email = new Email('default');
      $content = 'Phone number: '.$this->request->data['tel']."\r\n".'Email: '.$this->request->data['email']."\r\n".'Content: '.$this->request->data['content'];
      $email->from([$this->request->data['email'] => 'Customer'])
    ->to('pvtuanhcmus@gmail.com')
    ->subject($this->request->data['title'])
    ->send($content);
    }
   }

   public function productDetail() {
    $product_detail = '';
    $id = isset($this->request->params['id']) ? $this->request->params['id']  :'';
    if(!empty($id)){
      $product_detail = $this->Product->findById($id)->toArray();
    }
   
    $this->set(compact('product_detail'));
   }

   public function addProductIntoCart() {
    if($this->request->is('post')){

      $product_id = isset($this->request->data['product_id']) ? $this->request->data['product_id'] : '';
      $type = isset($this->request->data['type_product']) ? $this->request->data['type_product'] : '';

    if(!empty($product_id)){
      $productInfo = $this->Product->findById($product_id)->toArray();
    }
        $cart = $this->_session->read('item');

        if(empty($cart) && $productInfo){
            $cart['quantity'][$product_id][$type]  = 1;
        }else{
          if(key_exists($product_id, $cart['quantity'])){
              $cart['quantity'][$product_id][$type]  +=1;
          }else{
              $cart['quantity'][$product_id][$type]  = 1;
          }
        }
      $this->_session->write('item', $cart); //lưu mảng cart vào sesion item nè
      
    }
       $cart = $this->_session->read('item');

      $this->redirect('/order');

   }

   public function order() {
    $item = $this->_session->read('item');


    $listProductInCart = $this->Product->getListProductInCart($item);


    
    if($this->request->is('post')){
      if(isset($this->request->data['cart_delete'])){
        foreach ($this->request->data['cart_delete'] as $id) {
          if(array_key_exists($id, $item['quantity'])){
           unset($item['quantity'][$id]);
          }
        }
        $this->_session->write('item',$item);
      }else if(isset($this->request->data['cart_quantity']) && isset($this->request->data['product_id'])){
        $list_item = array_combine($this->request->data['product_id'], $this->request->data['cart_quantity']);
        $list_items['quantity'] = $list_item;
          $this->_session->delete('item');
          $this->_session->write('item', $list_items);
      }
      $item = $this->_session->read('item');
    }

    $this->set('productInCart',$item);
    $this->set('listProductInCart',$listProductInCart);
   }

   public function orderAddress(){
    $item = $this->_session->read('item');
    $listProductInCart = $this->Product->getListProductInCart($item);
    $this->set('productInCart',$item);
    $this->set('listProductInCart',$listProductInCart);
    if ($this->request->is('post')) {

      $conn = ConnectionManager::get('default');

      $conn->transactional(function () use ($item,$listProductInCart) {
      $orderDetailTable = TableRegistry::get('OrderDetail');
      $orderTable = TableRegistry::get('Orders');
      $order = $orderTable->newEntity();
      
      $data = $this->request->data;


      $order->customer_name = $data['name'];
      $order->address = $data['address'];
      $order->phone = $data['phone'];
      $order->email = $data['email'];
      $order->note = $data['note'];
      $order->status = 1;
      $order->created_at = date('Y-m-d H:i:s');
      $order->modified_at = date('Y-m-d H:i:s');
      $order->deleted_at = date('Y-m-d H:i:s');

     
      if ($data = $orderTable->save($order)) {
        $order_id = $data['id'];
        
      }

      if(!empty($listProductInCart) && !empty($item['quantity'])) {
          $totalMoney = $quantity = '';
         foreach ($listProductInCart as $product) {
          $orderDetail = $orderDetailTable->newEntity();
          foreach ($item['quantity'][$product['id']] as $key => $value) {
            $totalMoney += $product['price'] * $item['quantity'][$product['id']][$key];
            $quantity += $item['quantity'][$product['id']][$key];
            $orderDetail->id_order        = $order_id;
            $orderDetail->id_product      = $product['id'];
            $orderDetail->quantity        = $item['quantity'][$product['id']][$key];
            $orderDetail->price           = $product['price'];
            $orderDetail->created_at      = date('Y-m-d H:i:s');
            $orderDetail->modified_at     = date('Y-m-d H:i:s');
            $orderDetail->product_type_id = 1;
            $orderDetail->status = 1;

            $orderDetailTable->save($orderDetail);
            }
          }

          $order->id = $order_id;
          $order->quantity = $quantity;
          $order->total_price = $totalMoney;

          if ($data = $orderTable->save($order)) {

            $this->_session->destroy();
            $this->redirect('/');
          }

        }
                
      
        });
      }
   }

   public function orderSuccess(){
    
   }

}
