<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Manufacture;
use App\Models\Product;
use App\Models\Protype;
use Illuminate\Http\Request;

class ProtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protypes = Protype::orderBy('created_at', 'desc')->orderBy('type_id', 'asc')->paginate(10);
        return view('adminProtype')->with('protypes', $protypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminAddProtype');
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
            'type_name' => 'bail|required|string|max:255',
        ]);
        Protype::create($request->all());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $protype = Protype::where('type_id', $id)->first();
        return view('adminEditProtype')->with('protype',$protype);
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
            'type_name' => 'bail|required|string|max:255',
        ]);
        $protype = Protype::find($id);
        $protype->type_name = $request->type_name;
        $protype->update();
        return ProtypeController::index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('type_id', $id)->first();
        if ($product) {
            return redirect()->back();
        } else {
            Protype::destroy($id);
            return redirect()->back();
        }
    }
}
