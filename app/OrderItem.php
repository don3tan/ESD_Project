<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    protected $connection = 'mysql2';

    protected $table = 'order_items';

    public $primaryKey = array('id','order_id');
}
