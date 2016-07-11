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

       
        $images[0] = 'http://petdelivery.co/assets/images/home.jpg';
        $images[1] = 'http://petdelivery.co/assets/images/home2.jpg';

        // Read image path, convert to base64 encoding
        $image1Data = base64_encode(file_get_contents($images[0]));
        $image2Data = base64_encode(file_get_contents($images[1]));

        // Format the image SRC:  data:{mime};base64,{data};
        $src1 = 'data: '.mime_content_type($images[0]).';base64,'.$image1Data;
        $src2 = 'data: '.mime_content_type($images[1]).';base64,'.$image2Data;

        $images = [$src1,$src2];
        


        $posts=Post::where('destacado',1)->get();
        


        return view('welcome',['articles'=>$posts,'images'=>$images]);
    }

    public function productDetail($id)
    {
        return view('home',['articles'=>Articulo::where('id',$id)->get()]);
    }
 
}
