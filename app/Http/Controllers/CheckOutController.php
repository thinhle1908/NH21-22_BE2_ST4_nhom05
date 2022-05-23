<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function checkout(){
$carts = Carts::content();
$total = Carts::total();
$subtotal = Carts::subtotal();
return view('checkout',compact('carts', 'total', 'subtotal'));
    }
}
