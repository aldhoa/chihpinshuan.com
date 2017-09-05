<?php 
namespace App\Model\Table;

use Cake\ORM\Table;


class ProductTypeTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('product_type');
    }

    public function beforeFind($event, $query, $options)
    {
        $query->where(['status >' => 0]);
    }
}
?>