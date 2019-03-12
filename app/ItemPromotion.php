<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPromotion extends Model
{
    //
    protected $connection = 'mysql3';

    protected $table = 'item_promotions';

    public $primaryKey = array('id','inventory_id');
}
