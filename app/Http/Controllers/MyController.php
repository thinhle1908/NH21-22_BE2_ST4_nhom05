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
        $products = Product::all()->take(9);
        $manufactures = Manufacture::take(10)->get();
        $protype = Protypes::take(10)->get();
        $featureProducts = Product::where('feature',1)->get()->take(3);
        return view('index')->with('tenProductsFeature',$products)->with('tenManufactures',$manufactures)->with('tenProtypes',$protype)->with('featureproducts',$featureProducts);
    }
    public function shop()
    {
        $products = Product::search()->paginate(6);
        $manufactures = Manufacture::take(10)->get();
        $protype = Protypes::take(10)->get();
        return view('shop')->with('tenProductsFeature',$products)->with('tenManufactures',$manufactures)->with('tenProtypes',$protype);
    }
    public function page($name)
    {
        return view($name);
    }
    public $slug;
    public function mount($slug){
        $this->slug = $slug;
    }
    public function productDetails($id){
        $product = Product::find($id);
        $pro = Product::where('id',$id)->first();
        $related_product = Product::where('type_id',$product->type_id)->limit(3)->whereNotIn('id',[$id])->get();
        $manufactures = Manufacture::take(10)->get();
        return view('product-details',compact('pro'))->with('tenManufactures',$manufactures)->with('productRelated',$related_product);

    }
    public function showMoreProducts($qty)
    {
        $product = Product::skip($qty)->take(9)->get();
        return $product;
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
