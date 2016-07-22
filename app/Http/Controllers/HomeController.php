<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Articulo;
use App\Orden;


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
    public function orden(Request $request)
    {
            $data= $request->all();
            $email=$data['email'];
            $direccion=$data['direccion'];
            $telefono=$data['telefono'];
            $cantidad=$data['cantidad'];
            $producto=$data['producto'];
            $llamame=$data['llamame'];

            $orden = new Orden();
            $orden->email=$email;
            $orden->direccion=$direccion;
            $orden->telefono = $telefono;

            $orden->cantidad=$cantidad;
            $orden->producto= $producto;
            $orden->llamame= $llamame;
            $orden= $orden->save();

        return view('home',['articles'=>Articulo::all()]);
    }


    public function productDetail($id)
    {
        return view('product',['articles'=>Articulo::where('id',$id)->get()]);
    }
 
}
