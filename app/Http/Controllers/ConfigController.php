<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $input = $request->all();
        $file = array_get($input,'file');

        $destinationPath = 'uploads';
            // GET THE FILE EXTENSION
        $extension = $file->getClientOriginalExtension();
            // RENAME THE UPLOAD WITH RANDOM NUMBER
        $fileName = rand(11111, 99999) . '.' . $extension;
            // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
        $upload_success = $file->move($destinationPath, $fileName);


        $articulo = new Articulo();
    	//$data=$request->get('title','description','category','file');
       
        //$requestFile = $request->FileBag->getClientOriginalName();
        

        //if($request->hasFile('file')){
          
          $request->file('file')->move('/uploads',$fileName);

          $articulo->image=$fileName;
        //}
    	
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
