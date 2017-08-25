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
}
?>