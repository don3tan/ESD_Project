<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    protected $connection = 'mysql';

    protected $table = 'deliveries';

    public $primaryKey = 'id';

}
