<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $connection = 'mysql5';

    protected $table = 'promotions';

    public $primaryKey = 'id';
}
