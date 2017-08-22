<?php 
namespace App\Model\Table;

use Cake\ORM\Table;


class ProductTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('t_product');
    }
}
?>