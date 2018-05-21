<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\Http\Requests;
use Auth;
use Image;
use App\User;
use DB;

class Display extends Model
{
    $users = DB::table('users')->get();

}
