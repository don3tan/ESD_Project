<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $connection = 'mysql3';

    protected $table = 'inventories';

    public $primaryKey = 'id';

    public function itempromotion(){
        return $this->hasMany(ItemPromotion::Class,'inventory_id');
    }
}
