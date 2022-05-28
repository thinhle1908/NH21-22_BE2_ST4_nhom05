<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comment = Comment::paginate(10);
        return view('adminComment')->with('comment', $comment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminAddComment');
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
            'user_id' => 'bail|required|numeric',
            'comment' => 'bail|string|max:255',
            
        ]);
        $comment = new Comment();
        $comment->product_id = $request->product_id;
        $comment->user_id = $request->user_id;
        $comment->comment_comment = $request->comment_comment;
       
        $comment->save();
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
        $comment = Comment::where('comment_id', $id)->first();
        return view('adminEditComment')->with('comment',$comment);
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
            'user_id' => 'bail|numeric',
            'comment' => 'bail|string|max:255',
        ]);
        
        $comment = Comment::find($id);
        $comment->product_id = $request->product_id;
        $comment->user_id = $request->user_id;
        $comment->comment_comment = $request->comment_comment;
        $comment->update();
        return CommentController::index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::where('comment_id', $id)->first();
       
            Comment::destroy($id);
            return redirect()->back();
        
    }

}
