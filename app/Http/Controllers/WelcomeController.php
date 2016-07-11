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

    public function index()
    {

                // A few settings
        $images[] = '/assets/images/home.jpg';
        $images[] = '/assets/images/home2.jpg';

        // Read image path, convert to base64 encoding
        $image1Data = base64_encode(file_get_contents($image[0]));
        $image2Data = base64_encode(file_get_contents($image[1]));

        // Format the image SRC:  data:{mime};base64,{data};
        $src1 = 'data: '.mime_content_type($image1Data).';base64,'.$imageData1Data;
        $src2 = 'data: '.mime_content_type($image2Data).';base64,'.$imageData2Data;

        $images = [$src1,$src2];

        $posts=App\Post::where('destacado',1)->get();
        


        return view('home',['articles'=>$posts],'images'=>$images);
    }

    public function productDetail($id)
    {
        return view('home',['articles'=>Articulo::where('id',$id)->get()]);
    }
 
}
