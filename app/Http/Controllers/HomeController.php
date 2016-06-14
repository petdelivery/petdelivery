<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Articulo;

class HomeController extends Controller
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

    public function articles()
    {
        return view('home',['articles'=>Articulo::all()  ]);
    }

    public function articleDetail($id)
    {
        return view('home',['articles'=>Articulo::where('id',$id)->get()]);
    }
 
}
