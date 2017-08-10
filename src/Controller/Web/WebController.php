<?php
namespace App\Controller\Web;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


class WebController extends AppController
{

   public function index(){
    echo 'Web Controller';
   }
}
