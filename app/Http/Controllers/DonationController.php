<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Donation;
use Validator;
use Illuminate\Support\Facades\Input;

use DB;

class DonationController extends Controller
{
  
public function PostDonation(Request $request){


    $this->validate($request, [
      
      'first_name' => 'required|max:255',
            'last_name' =>'required|max:255',
            'alumnus' => 'required|max:11',
            'preferred_address' =>'required|max:255',
            'telephone' => 'required|max:14',
            'designation' =>'required|max:255',
            'memoryof' => 'required|max:1000',
            'honorof' =>'required|max:1000',
            'emailfor' => 'required|max:255',
            'cityfor'=>'required|max:255'
      ]);

    Donation::create(array(
      
        'first_name' => Input::get('first_name'),
            'last_name' =>Input::get('last_name'),
            'alumnus' => Input::get('alumnus'),
            'preferred_address' =>Input::get('preferred_address'),
            'telephone' => Input::get('telephone'),
            'designation' =>Input::get('designation'),
            'memoryof' => Input::get('memoryof'),
            'honorof' =>Input::get('honorof'),
            'emailfor' => Input::get('emailfor'),
            'cityfor'=> Input::get('cityfor')
         
            ));
    return view('bill');

}

public function getDonators(){



    $donation= Donation::where(DB::raw("CONCAT(name, '' , second)"), 'LIKE',  "%{$search}%")
->orWhere('city', ' LIKE', '%{$search}%')
->get();


    return view ('bill')->with('donation', $donation);

}

}
