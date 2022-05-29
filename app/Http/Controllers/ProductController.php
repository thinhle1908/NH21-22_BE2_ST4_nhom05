<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Protype;
use App\Models\Manufacture;
use App\Models\Comment;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('adminProduct')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $protypes = Protype::all();
        $manufactures = Manufacture::all();
        return view('adminAddProduct')->with('protypes', $protypes)->with('manufactures', $manufactures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|string|max:255',
            'manu_id' => 'bail|required|numeric',
            'type_id' => 'bail|required|numeric',
            'price' => 'bail|required|numeric',
            'image' => 'image|required',
            'description' => 'bail|required|string',
            'feature' => 'bail|required|boolean'
        ]);
        $nameimg = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/product-details', $nameimg);
        //cach 2
        $product = new Product();
        $product->name = $request->name;
        $product->manu_id = $request->manu_id;
        $product->type_id = $request->type_id;
        $product->price = $request->price;
        $product->image = $nameimg;
        $product->description = $request->description;
        $product->feature = $request->feature;
        $product->save();
        //cach 1
        // Product::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $protypes = Protype::all();
        $manufactures = Manufacture::all();
        $product = Product::where('id', $id)->first();
        return view('adminEditProduct')->with('protypes', $protypes)->with('manufactures', $manufactures)->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'bail|required|string|max:255',
            'manu_id' => 'bail|required|numeric',
            'type_id' => 'bail|required|numeric',
            'price' => 'bail|required|numeric',
            'image' => 'image',
            'description' => 'bail|required|string',
            'feature' => 'bail|required|boolean'
        ]);
        if ($request->image) {
            $nameimg = $request->file('image')->getClientOriginalName();
            $request->file('image')->move('images/product-details', $nameimg);
        }
        $product =  Product::find($id);
        $product->name = $request->name;
        $product->manu_id = $request->manu_id;
        $product->type_id = $request->type_id;
        $product->price = $request->price;
        if ($request->image) {
            $product->image = $nameimg;
        }
        $product->description = $request->description;
        $product->feature = $request->feature;
        $product->update();
       
        return ProductController::index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }


    
}
