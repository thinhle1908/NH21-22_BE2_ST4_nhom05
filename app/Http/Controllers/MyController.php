<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protypes;
use App\Models\Orders;            
use App\Models\Orders_Items;
use App\Models\Rating;
use Mail;

class MyController extends Controller
{
    //
    public function showProtypebyID($type_id)
    {
        $product = Product::where('type_id',$type_id)->paginate(6);
        $manufactures = Manufacture::take(10)->get();
        $protype = Protypes::take(10)->get();
        $featureProducts = Product::where('feature',1)->get()->take(3);
        return view('shop')->with('tenProductsFeature',$product)->with('tenManufactures',$manufactures)->with('tenProtypes',$protype)->with('featureproducts',$featureProducts);
    }
    public function showManufacturebyID($manu_id)
    {
        $product = Product::where('manu_id',$manu_id)->paginate(6);
        $manufactures = Manufacture::take(10)->get();
        $protype = Protypes::take(10)->get();
        $featureProducts = Product::where('feature',1)->get()->take(3);
        return view('shop')->with('tenProductsFeature',$product)->with('tenManufactures',$manufactures)->with('tenProtypes',$protype)->with('featureproducts',$featureProducts);
    }
    public function showProductbyPrice($min,$max)
    {
        $products = Product::whereBetween('price',[$min,$max])->get();
        return $products;
    }
    public function showMoreProductsFeature($qty)
    {
        $from = $qty-3;
        $product = Product::where('feature',1)->skip($from)->take(3)->get();
        return $product;
    }
    public function index()
    {
        $qtyproduct = Product::where('feature',1)->count();
        $products = Product::all()->take(9);
        $manufactures = Manufacture::take(10)->get();
        $protype = Protypes::take(10)->get();
        $featureProducts = Product::where('feature',1)->orderBy('id','desc')->get()->take(3);
        return view('index')->with('tenProductsFeature',$products)->with('tenManufactures',$manufactures)->with('tenProtypes',$protype)->with('featureproducts',$featureProducts)->with('qtyProductFeature',$qtyproduct);
    }
    public function shop()
    {
        $products = Product::search()->paginate(6);
        $manufactures = Manufacture::take(10)->get();
        $protype = Protypes::take(10)->get();
        $featureProducts = Product::where('feature',1)->get()->take(3);
        return view('shop')->with('tenProductsFeature',$products)->with('tenManufactures',$manufactures)->with('tenProtypes',$protype)->with('featureproducts',$featureProducts);;
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
        $protype = Protypes::take(10)->get();
        $pro = Product::where('id',$id)->first();
        $related_product = Product::where('type_id',$product->type_id)->limit(3)->whereNotIn('id',[$id])->get();
        $manufactures = Manufacture::take(10)->get();

        //phuc vu cho rating
      
        $rating = Rating::where('product_id',$id)->avg('rating');
        $rating = round($rating);
        
        // [het] phuc vu cho rating
       
        return view('product-details',compact('pro'))->with('tenManufactures',$manufactures)->with('productRelated',$related_product)->with('rating',$rating)->with('tenProtypes',$protype);

    }
    public function showMoreProducts($qty)
    {
        $product = Product::skip($qty)->take(9)->get();
        return $product;
    }
    //ShowCart
    function showCart(){
        //echo "<pre>";
        //print_r(session()->get('cart'));
        $carts = session()->get('cart');
        return view('cart',compact('carts'));
    }
    //AddToCart
    public function addToCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id]) ){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }else {
            
            $cart[$id] = [
                'id' => $id,
                'name' => $product->name,
                'manu_id'=>$product->manu_id,
                'type_id'=>$product->type_id,
                'price'=>$product->price,
                'image'=>$product->image,
                'description'=>$product->description,
                'quantity'=> 1
                
            ];
        }
        //echo "<pre>";
        //print_r(session()->get('cart'));
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }
    //UpdateCart
    public function updateCart(Request $request)
    {
        if($request ->id && $request ->quantity){
            $carts = session() ->get('cart');
            $carts[$request->id]['quantity'] = $request -> quantity;
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cart_items = view('cart', compact('carts'))->render();
            return response() -> json(['cart_items' => $cart_items ,'code' => 200], 200);
        }
    }
    //DeleteCart
    public function deleteCart(Request $request)
    {
        if($request ->id){
            $carts = session() ->get('cart');
            unset($carts[$request->id]);
            session()->put('cart',$carts);
            $carts = session()->get('cart');
            $cart_items = view('cart', compact('carts'))->render();
            return response() -> json(['cart_items' => $cart_items ,'code' => 200], 200);
        }
    }
    public function showProductbyCart(){
        $carts = session()->get('cart');
        return view('checkout',compact('carts'));
    }
    public function addOrder(Request $request)
    {
$order = Orders::create($request->all());
$carts = session()->get('cart');
$email_to = $order->order_email;
$name = $order->order_name;
foreach ($carts as $cart){
    $data = [
        'order_id' => $order->id,
        'product_id' => $cart['id'],
        'qty' => $cart['quantity'],
        'price' => $cart['price'],
        'total' => $cart['price']* $cart['quantity']*1.1 ,

    ];
    Orders_Items::create($data);
    
    }
    
    Mail::send('email',compact('order','carts'), function ($message) use ($email_to){
        
        $message->to($email_to);
        $message->subject('Order Notification');
    });
    // Mail::send('email',[
    //     'order' => $request->order

    // ], function($email) use( $c_email){
    //     $email->to($c_email);
    //     $email->from('20211tt2540@mail.tdc.edu.vn');
    //     $email->subject('DUong Van quang');
    // });
    
    
    $request->session()->flush();
    return "ThanhCong";
}
public function sendEmail($order){
    $email_to = $order->order_email;
    Mail::send(view('email',compact('order'), function ($message) use ($email_to){
        $message->from('20211tt2540@mail.tdc.edu.vn');
        $message->to($email_to,$email_to);
        $message->subject('Order Notification');
    }));

}
//     public function placeOrder(Request $request){
//         // $data = array();
//         // $data['shipping_name'] = $request->shipping_name;
//         // $data['shipping_email'] = $request->shipping_email;
//         // $data['shipping_address'] = $request->shipping_address;
//         // $data['shipping_phone'] = $request->shipping_phone;
//         // $shipping_id = DB::table('shipping')->insertGetId($data);
//         // Session::put('shipping_id',$shipping_id);
//         // return Redirect('/payment');
//         $order = new Orders();
//         $order->order_name = $request->input('order_name');
//         $order->order_address = $request->input('order_address');
//         $order->order_email = $request->input('order_email');
//         $order->order_phone = $request->input('order_phone');
//         $order->order_notes = $request->input('order_notes');
//         $order->save();
//         $carts = session()->get('cart');
//         foreach ($carts as $item){
//             Orders_Items::create(
//                 [
//                     'order_id' => $order->id,
//                     'product_id' => $item->product_id,
//                     'qty' => $item->quantity,
//                     'price' => $item->price,
                
                
//                 ]
//                 );
//                 }
//             return view('checkout');
//     }
// public function payment(){}

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

    //forgot password: Minh
    public function forgotPassword()
    {
        return view('resources/views/forgot-password.blade.php');
    }

    //Rating: Minh

}
