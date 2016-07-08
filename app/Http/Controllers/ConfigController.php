<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Articulo;
use \Input as Input;

class ConfigController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function ListArticles($category=null){

    if(!$category)
    	return view('config',['articulos'=>Articulo::all(),'category'=>$category]);
    else 
        return view('config',['articulos'=>Articulo::where('category',$category)->get(),'category'=>$category]);
    }


    public function NewArticle(Request $request){
        $articulo = new Articulo();
    	$request->get('title','description','category','file');
        $requestFile = $request->get('file');
        dd(Request::file('file'));

        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('uploads',$file->getClientOriginalName());
            $articulo->image=$file->getClientOriginalName();
        }
    	
    	$articulo->title=$request['title'];
    	$articulo->description= $request['description'];
        $articulo->category=$request['category'];
        $articulo->precio=$request['precio'];
        $articulo->destacado=$request['destacado'];
    	$articulo->save();
  		return redirect('/config/articles/');
    
    }

    public function RemoveArticle($id){


        $articulo =Articulo::where('id', $id)->delete();

        return redirect('/config/articles/');
    
    }
}
