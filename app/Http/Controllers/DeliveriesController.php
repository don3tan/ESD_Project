<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class DeliveriesController extends Controller
{
    //

    public function view(){

        $delivery = DB::table('deliveries')->get();

        return view('logistic.view')->with('delivery',$delivery);
    }

    public function edit(){
        return view('logistic.edit');
    }
}
