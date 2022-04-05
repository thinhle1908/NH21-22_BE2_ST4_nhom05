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
    public function err404(){
        return view('404');
    }
    public function blog_single(){
        return view('blog-single');
    }
    public function blog(){
        return view('blog');
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
    public function contact_us(){
        return view('contact-us');
    }
}
