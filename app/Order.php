<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $connection = 'mysql2';

    protected $table = 'orders';

    public $primaryKey = 'id';
}
