<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

/**
 * HomeController
 */
class HomeController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //Category::with('children')
        $posts = Posts::whereNull('previous_post_id')->with('children')->get();

      
        return view('index',[
            'posts' => $posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $post= new Posts();
        $post->name = $request->name;
        $post->message = $request->message;
        //$post->next_post_id = $request->next_post_id;
        $post->previous_post_id = $request->previous_post_id;

        $post->save();

        //return redirect()->back()->withSuccess('Post created!');
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
}
