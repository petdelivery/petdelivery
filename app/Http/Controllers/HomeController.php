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
        public function nosotros()
    {

        return view('contacto');
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

            1
        return redirect('',['notificacion'=>'Se ha recibido su orden, pronto nos pondremos en contacto con usted']);

       // return view('home',['articles'=>Articulo::all()]);
    }


    public function productDetail($id)
    {
        return view('product',['articles'=>Articulo::where('id',$id)->get()]);
    }
 
}
