<?php 
namespace App\Model\Table;

use Cake\ORM\Table;


class OrderDetailTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('order_detail');
    }
}
?>