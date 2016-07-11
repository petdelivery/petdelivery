<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Articulo;
use App\Post;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function inicio()
    {

       

        $posts=Post::where('destacado',1)->get();
        


        return view('welcome',['articles'=>$posts]);
    }

    public function productDetail($id)
    {
        return view('home',['articles'=>Articulo::where('id',$id)->get()]);
    }
 
}
