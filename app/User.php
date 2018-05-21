<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{

 public function posts(){

return $this->hasMany('App\Post');

 }
  
  public function likes(){

      return $this->hasMany('App\Like', 'user_id');


  }
  public function hasLikePost(Post $post){

  return (bool) $post->likes
  ->where('likeable_id', $post->id)
  ->where('likeable_type', get_class($post))
  ->where('user_id', $this->id)
  ->count();
  }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'second', 'email', 'city', 'course', 'password', 'posts', 'bio', 'likeable',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}


