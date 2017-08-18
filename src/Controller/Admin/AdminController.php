<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
         use Cake\ORM\TableRegistry;

class AdminController extends AppController
{
   public function product(){ 
      $this->loadModel('Admin'); 
      $this->set('title', 'Cripy Pork Jerky');
      $data = $this->Admin->find()->all()->toArray();
      $this->set('data', $data);

      // $this->render('product'); 
    }

   public function add (){
      $this->loadModel('Admin');
      $this->set('title', 'Cripy Pork Jerky');
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

   public function edit (){
      $this->loadModel('Admin');
      $this->set('title', 'Cripy Pork Jerky');
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
}
