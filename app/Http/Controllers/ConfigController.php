<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Articulo;

class ConfigController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function ListArticles(){

    	return view('config',['articulos'=>Articulo::all()]);
    }

    public function NewArticle(Request $request){

    	$request->get('title','description');
    	$articulo = new Articulo();
    	$articulo->title=$request['title'];
    	$articulo->description= $request['description'];
    	$articulo->save();
  		return redirect('/config/articles');
    
    }
}
