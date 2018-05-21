<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\Http\Requests;
use Auth;
use Image;
use App\User;

class Post extends Model
{
    


    //post model code
    public function users()
    {

     return $this->belongsTo('App\User');

    }

  

public function likes(){
      
      return $this->morphMany('App\Like', 'likeable');

}

}
