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
        return view('adminProduct')->with('products',$products);
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
        return view('adminAddProduct')->with('protypes',$protypes)->with('manufactures',$manufactures);
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
            'name'=>'required',
            'manu_id'=>'required',
            'type_id'=>'required',
            'price'=>'required',
            'image'=>'required',
            'description'=>'required',
            'feature'=>'required'
        ]);
        $protypes = Protype::all();
        $manufactures = Manufacture::all();
        Product::create($request->all());
        return view('adminAddProduct')->with('succes','Product created successfully')->with('protypes',$protypes)->with('manufactures',$manufactures);
        
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
