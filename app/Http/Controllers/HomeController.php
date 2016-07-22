<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Articulo;
use App\Post;

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

    public function products()
    {

        return view('home',['articles'=>Articulo::all()]);
    }
    public function orden($request)
    {
            $data= $request->all();
            var_dump($data);
            

        return view('home',['articles'=>Articulo::all()]);
    }


    public function productDetail($id)
    {
        return view('product',['articles'=>Articulo::where('id',$id)->get()]);
    }
 
}
