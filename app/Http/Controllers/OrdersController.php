<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    //
    public function create(){

        $inventory = DB::connection('mysql3')->table('inventories')->get();

        return view('customer.create')->with('inventory',$inventory);
    }

    public function billing(Request $request){

        $inventory = DB::connection('mysql3')->table('inventories')->get();

        $counter = 0;

        foreach($inventory as $item){
            $quantity = $request->input(str_replace(" ","",$item->name));
            if($quantity !== NULL){
                $counter = $counter + (int)$quantity;
            }
        }

        if($counter == 0){
            return redirect('/customer')->with('error','You did make any selections. Please buy something ToT');
        }

        return view('customer.billing')->with(['inventory'=>$inventory]);
    }

    public function charge(Request $request){

        require_once(base_path()."/vendor/stripe/autoload.php");


        \Stripe\Stripe::setApiKey("sk_test_xWlrQpkyf8nkDIcojuAijTdp");


        $name = $request->input("name");
        $price = $request->input("price")*100;
        $email = $request->input("email");
        $token = $request->input('stripeToken');

        $customer = \Stripe\Customer::create(array(
            "email" => $email,
            "source" => $token
        ));

        $charge = \Stripe\Charge::create(array(
        "amount" =>$price,
        "currency"=>"sgd",
        "description"=>$name,
            "customer"=> $customer->id,
            "receipt_email" => $email
        ));

        // ['name'=>$name, 'orderid'=>$charge->id]

        $success_msg = 'Hello, '. $name.'. Your order was successful with orderID of '. $charge->id ." :)";

        $inventory = DB::connection('mysql3')->table('inventories')->get();

        

        return redirect('/customer')->with(['success'=>$success_msg,'inventory'=>$inventory]);
    }
}
