<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function posts()
    {
        return view('home',['posts'=>Post::all()  ]);
    }

    public function postDetail($id)
    {
        return view('home',['posts'=>post::where('id',$id)->get()]);
    }
 
}