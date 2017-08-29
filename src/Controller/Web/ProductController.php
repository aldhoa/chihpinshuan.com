<?php
namespace App\Controller\Web;
use App\Controller\AppController;


class ProductController extends AppController
{
  protected $_session;
	public function initialize()
    {
        parent::initialize();
        $this->loadModel('Product');
        $this->loadModel('Orders');
        $this->loadModel('User');
        $this->viewBuilder()->setLayout('web');
        $this->_session = $this->request->session();

     
    }

   public function index(){
    
   }


   public function media(){
    
   }

   public function prodtype(){
    $products = $this->Product->find()->all()->toArray();
    $this->set(compact('products'));
   }

   public function orderinfo(){
    
   }

   public function contact(){
    
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
    $product_id = isset($this->request->params['id']) ? $this->request->params['id'] : '';
    if(!empty($product_id)){
      $productInfo = $this->Product->findById($product_id)->toArray();
    }
    $cart = $this->_session->read('item');
        if(empty($cart) && $productInfo){
            $cart['quantity'][$product_id]  = 1;
        }else{
            if(key_exists($product_id, $cart['quantity'])){
                $cart['quantity'][$product_id]  +=1;
            }else{
                $cart['quantity'][$product_id]  = 1;
            }
        }
        $session->write('item', $cart); //lưu mảng cart vào sesion item nè
        $this->redirect('/order');
   }

   public function order() {
    $item = $this->_session->read('item');
    $listProductInCart = $this->Product->getListProductInCart($item);
    $this->set('productInCart',$item);
    $this->set('listProductInCart',$listProductInCart);
    if($this->request->is('post')){
      if($this->request->data['cart_delete']){

        $cart_delete = array_flip($this->request->data['cart_delete']);

        echo '<pre>';
        print_r($cart_delete);
        echo '</pre>';
      
      }
    }
   }

   public function orderAddress(){


   }

   public function orderSuccess(){
    
   }

}
