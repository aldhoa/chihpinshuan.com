<?php 
namespace App\Model\Table;

use Cake\ORM\Table;


class ProductTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('product');
    }

    public function beforeFind($event, $query, $options)
    {
        $query->where(['status >' => 0]);
    }

    public function getListProductInCart($listID){
    	$list_id = array_keys($listID['quantity']);
    	$productList = $this->find()->select()->where(['id IN' => $list_id])->all();

    	return $productList ? $productList->toArray() : [];
    }
}
?>