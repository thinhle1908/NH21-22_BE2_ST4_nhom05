<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;
class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rating = Rating::paginate(10);
        return view('adminRating')->with('rating', $rating);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminAddRating');
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
            'product_id' => 'bail|required|numeric',
            'rating' => 'bail|required|numeric',
            
        ]);
        $rating = new Rating();
        $rating->product_id = $request->rating;
        $rating->rating = $request->rating;
       
       
        $rating->save();
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
        $rating = Rating::where('id', $id)->first();
        return view('adminEditRating')->with('rating',$rating);
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
            'product_id' => 'bail|numeric',
            'rating' => 'bail|numeric',
            
        ]);
        
        $rating = Rating::find($id);
        $rating->product_id = $request->product_id;
        $rating->rating = $request->rating;
      
        $rating->update();
        return RatingController::index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rating = Rating::where('id', $id)->first();
       
            Rating::destroy($id);
            return redirect()->back();
        
    }
}
