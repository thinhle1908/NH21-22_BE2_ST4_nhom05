<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Protype;
use App\Models\Manufacture;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
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
            'name' => 'bail|required|alpha_num|max:255',
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
        return redirect()->back()->with('succes', 'Product created successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
