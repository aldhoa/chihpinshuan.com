<?php
namespace App\Controller\Web;
use App\Controller\AppController;


class ProductController extends AppController
{

	  public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('web');
    }

   public function index(){
    
   }
}