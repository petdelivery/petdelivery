<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use \Input as Input;
use App\Orden;

class ConfigController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function ListProducts($category=null){


        $ordenes = Orden::all();
        

    if(!$category)
    	return view('config',['articulos'=>Articulo::all(),'category'=>$category,'ordenes'=>$ordenes]);
    else 
        return view('config',['articulos'=>Articulo::where('category',$category)->get(),'category'=>$category,'ordenes'=>$ordenes]);
    }


    public function NewProduct(Request $request){

        $input = $request->all();
        $file = array_get($input,'file');

        $destinationPath = 'uploads';
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(11111, 99999) . '.' . $extension;
        $upload_success = $file->move($destinationPath, $fileName);
        $articulo = new Articulo();
        $articulo->image=$fileName;
    	$articulo->title=$request['title'];
    	$articulo->description= $request['description'];
        $articulo->category=$request['category'];
        $articulo->precio=$request['precio'];
        $articulo->destacado=$request['destacado'];
    	$articulo->save();
  		return redirect('/config/products/');
    
    }

    public function RemoveProduct($id){


        $articulo =Articulo::where('id', $id)->delete();

        return redirect('/config/products/');
    
    }
}
