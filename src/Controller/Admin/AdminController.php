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
    echo 'Admin Controller';
   }
}
