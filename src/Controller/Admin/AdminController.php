<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


class AdminController extends AppController
{
   public function index(){
   $this->loadModel('Admin');
   $data = $this->Admin->find()->first()->toArray();
   echo '<pre>';
   print_r($data);
   echo '</pre> Luu Duc Hoa';
   die;
   }

   public function project(){
      $this->loadModel('Admin');
      $this->set('title', 'Cripy Pork Jerky');
   $data = $this->Admin->find()->all()->toArray();
   $this->set('data', $data);
   }
}
