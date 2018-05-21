<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use Auth;
use Image;
use App\Post;
use App\User;


class UserController extends Controller
{
    
      public function getDashboard()
    {
        $posts = Post::all();
        return view('dashboard', ['posts' => $posts]);
    }
    
 
public function profile(){
       return view('profile', array('user'=> Auth::user()) );

    } 
    public function update_avatar(Request $request){
    //handle the user upload of avatar
    if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time().'.'. $avatar->getClientOriginalExtension();

        Image::make($avatar)->resize(300, 300)->save(public_path("/uploads/avatars/$filename") );
     
        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
    }
    return view('profile', array('user'=> Auth::user()) );
}
public function __construct()
    {
        $this->middleware('auth');
    }
public function getGallery(){
 
  return view('gallery', array('user'=> Auth::user()));
   

}
public function getNews(){
 
  return view('news', array('user'=> Auth::user()));
   

}
public function getDonation(){
 
  return view('donate', array('user'=> Auth::user()));
   

}
public function getView(){
 
  return view('view', array('user'=> Auth::user()));
   

}
public function getMember(){
 
  return view('membership', array('user'=> Auth::user()));
   

}
public function getAlumnigiving(){


  return view('alumnigiving');
}

public function getEvents(){


  return view('events');
}

public function getReunion(){


  return view('reunion');
}
public function getUsers(){

$users = User::get();

return view('users')->with('users', $users);



}
public function editUser($id){
  $user =User::find($id);
  return view('useredit')->with('user', $user);



}
public function UpdateUser($id){
  
  $name = $_POST['name'];
  $email = $_POST['email'];

User::where('id', $id)
          ->update(['name' => $name],['email',$email]);

return redirect::back()->with('success', 'User updated succesfully!');



}
public function deleteUser($id){


User::where('id', $id)
          ->delete();

return redirect::back()->with('success', 'User deleted succesfully!');



}

}