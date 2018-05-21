<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Post;
use Auth;
use Image;
use App\Like;
use App\User;

class PostController extends Controller
{
      public function getDashboard()
    {

        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard',['posts' => $posts]);
    }
    //
    public function postCreatePost(Request $request){
    //validation
    $this->validate($request, [
      'body'=>'required|max:1000'
      ]);
    $post= new Post();
    $post->body = $request['body'];
    $message ='There was an error';
   if ($request->user()->posts()->save($post))
    {
        $message = 'Post succesfully created!';
    }

    return redirect()->route('dashboard')->with (['message' => $message]);


}
public function post()
    {
        return view('dashboard');
    }
 public function getDeletePost($post_id)
 {

 $post = Post::where('id', $post_id)->first();
  if (Auth::user() !=$post->user){
      return redirect()->back();

  }
   $post->delete();
return redirect()->route('dashboard')->with(['message' => 'succesfully deleted']);
 }
 public function postEditPost(Request $request)
 {
 $this->validate($request, [
  'body' => 'required'
  ]);
 $post = Post::find($request['postId']);
  if (Auth::user() !=$post->user){
    return redirect()->back();
}
 $post->body = $request['body'];
 $post->update();
 return response()->json(['new_body' => $post->body],200);

 }
public function getLike($post_id)
{
  $post =Post::find($post_id);

  if(!$post){

    return redirect()->route('home');
  }
  if (Auth::user()->hasLikePost($post)){

     return redirect()->back();
  }
  $like = $post->likes()->create([]);
  Auth::user()->likes()->save($like);

  return redirect()->back();
}


}
