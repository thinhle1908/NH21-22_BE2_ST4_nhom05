<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protypes;


class MyController extends Controller
{
    //
    public function index()
    {
        $products = Product::where('feature', '1')->take(6)->get();
        $manufactures = Manufacture::take(10)->get();
        $protype = Protypes::take(10)->get();
        return view('index', ['tenProductsFeature' => $products,'tenManufactures'=>$manufactures,'tenProtypes'=>$protype]);
    }
    public function page($name)
    {
        return view($name);
    }

    // public function login(){
    //     return view('login');
    // }
    // public function productdetails(){
    //     return view('product-details');
    // }
    // public function shop(){
    //     return view('shop');
    // }
    // public function err404(){
    //     return view('404');
    // }
    // public function blog_single(){
    //     return view('blog-single');
    // }
    // public function blog(){
    //     return view('blog');
    // }
    // public function cart(){
    //     return view('cart');
    // }
    // public function checkout(){
    //     return view('checkout');
    // }
    // public function contact_us(){
    //     return view('contact-us');
    // }
}
