<?php
namespace App\Controller\Web;
use App\Controller\AppController;


class ProductController extends AppController
{
	public function initialize()
    {
        parent::initialize();
        $this->loadModel('Product');
        $this->loadModel('Orders');
        $this->loadModel('User');
        $this->viewBuilder()->setLayout('web');

     
    }

   public function index(){
    
   }


   public function media(){
    
   }

   public function prodtype(){
    $products = $this->Product->find()->where(['status' => 1])->all()->toArray();
    $this->set(compact('products'));
   }

   public function orderinfo(){
    
   }

   public function contact(){
    
   }

   public function productDetail() {

   }

   public function order() {

   }

   public function orderAddress(){

   }

   public function orderSuccess(){
    
   }

}
