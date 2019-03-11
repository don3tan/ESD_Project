<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function placeorder(){
        return view('customer.placeorder');
    }
}
