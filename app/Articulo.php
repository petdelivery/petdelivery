<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
     protected $fillable=['title','description','image','category','precio','destacado'];

     public function category()
    {
        return $this->belongsto('App\Articulo');
    }

}
