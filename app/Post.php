<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     protected $fillable=['title','description','image','destacado'];

     public function category()
    {
        return $this->belongsto('App\Post');
    }

}
