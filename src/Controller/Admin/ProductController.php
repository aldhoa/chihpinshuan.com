<?php
namespace App\Controller\Admin;
use Cake\ORM\TableRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Event\Event;
use Cake\Utility\Text;





class ProductController extends AdminController {
  
  public $max_file = 4;
  public $max_file_size = 5120000;

  public function initialize() {
    $this->loadModel('Product');
    parent::initialize();
  }

  public function uploadFile($data,$id) {
    if(!empty($data)) {
      if(count($data) > $this->max_file){
        throw new InternalErrorException("Error Processing Request.Max number files accepted is {$this->max_file}", 1);
      }
      foreach ($data as $key => $file) {
        $img_number = $key + 1;
        $filename = $file['name'];
        $file_tmp_name = $file['tmp_name'];
        $dir = WWW_ROOT.'img'.DS.'uploads';
        $allowed = array('png','jpg','jpeg');

        $column = 'image_'.$img_number;
        if(!in_array(substr(strrchr($filename, '.'),1), $allowed)){
          throw new InternalErrorException("Error Processing Request.",1);
        }else if($file['size'] > $this->max_file_size){
          throw new InternalErrorException("Max size file accepted is {$this->max_file_size}",1);
        }else if(is_uploaded_file($file_tmp_name)){
          $filename = Text::uuid().'-'.$filename;

          $filedb = TableRegistry::get('Product');
          $entity = $filedb->newEntity();
          $entity->id = $id;
          $entity->$column = $filename;
          
          $filedb->save($entity);
          move_uploaded_file($file_tmp_name, $dir.DS.$filename);
        }
      }
    }
  }

  public function product() { 
    $data = $this->Product->find()->where(['status' => 1])->all()->toArray();
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
      $product->created_at = date('Y-m-d H:i:s');
      $product->modified_at = date('Y-m-d H:i:s');
    
      if ($productTable->save($product)) {
        $id = $product->id;
        $this->uploadFile($data['image'],$id);
        $this->redirect(['action' => 'product']);
      }
    }
  }

  public function edit () {
    $id = $this->request->params['id'];
    $productTable = TableRegistry::get('Product');
    $product = $productTable->get($id)->toArray();

    if ($this->request->is('post')) {
      $product = $productTable->newEntity();
      $data = $this->request->data;
      $product->id = $id;
      $product->name = $data['name'];
      $product->note = $data['note'];
      $product->price = $data['price'];
      $product->created_at = date('Y-m-d H:i:s');
      $product->modified_at = date('Y-m-d H:i:s');


      if ($productTable->save($product)) {
        $this->uploadFile($data['image'],$id);
        $this->redirect(['action' => 'product']);
      }
    }
    $this->set('value', $product);
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
