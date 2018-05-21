<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
class SearchController extends Controller
{
    public function getResults(Request $request){
      
    $search = $request->input('search');
      if (!$search){

        return redirect()->route('view');
      }

$users= User::where(DB::raw("CONCAT(name, '' , second)"), 'LIKE',  "%{$search}%")
->orWhere('city', ' LIKE', '%{$search}%')
->get();


    return view ('searchUsers')->with('users', $users);

    }
}
