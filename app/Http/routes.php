<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('dashboard', [
'uses' => 'PostController@getDashboard',
'as' => 'dashboard',
'middleware'=>'auth'
]);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();



Route::get('/home', 'HomeController@index');
//profile

Route::get('profile', 'UserController@profile');
//route to the users profile
Route::post('profile', 'UserController@update_avatar');

//route to create posts by the user
Route::post('/createpost',[
      'uses'=>'PostController@postCreatePost',
      'as' => 'post.create',
       'middleware' => 'auth'
       ]);
//route to delete the post created by th user
Route::get('/delete-post /{post_id}',[

  'uses' => 'PostController@getDeletePost',
  'as' => 'post.delete',
   'middleware'=>'auth'
       ]);
//route to edit th content of a post
Route::post('/edit', [
	'uses' => 'PostController@postEditPost',
	'as' => 'edit'
]);
Route::post('/like', [
'uses' => 'PostController@postLikePost',
'as'   => 'like'
  ]);


Route::get('/gallery', 'UserController@getGallery');
Route::get('/news', 'UserController@getNews');
Route::get('/donate', 'UserController@getDonation');
Route::get('/view', 'UserController@getView');
Route::get('/membership', 'UserController@getMember');
Route::get('/alumnigiving', 'UserController@getAlumnigiving');
Route::get('/events', 'UserController@getEvents');

Route::get('/searchUsers', [
'uses' => 'SearchController@getResults',
'as' => 'search.results'
  ]);
Route::post('/donate',[
      'uses'=>'DonationController@PostDonation',
      'as'=>'create.donate'
                     ]);

Route::get('/d',  function(){

 return view::make('donate');
});




Route::get('/post/{post_id}/like', [
'uses' => 'PostController@getLike',
  'as' => 'post.like',
   'middleware'=>'auth'

  ]);


//user profile

Route::get('/user/{name}', [
 'uses' => 'ProfileController@getProfile',
 'as'   =>'profile.index',

  ]);
Route::get('/reunion', 'UserController@getReunion');
Route::get('/users', 'UserController@getUsers');
Route::get('/users/edit/{id}', 'UserController@editUser');

Route::post('/users/update/{id}', 'UserController@UpdateUser');
Route::get('/users/delete/{id}', 'UserController@deleteUser');
