<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function login(){
        return view('login');
    }
    public function productdetails(){
        return view('product-details');
    }
    public function shop(){
        return view('shop');
    }
}
