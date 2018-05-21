<?php

namespace App;


use Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
class Donation extends Model
{

     protected $fillable = [
        'first_name', 'last_name', 'emailfor', 'cityfor', 'designation', 'honorof', 'memoryof', 'alumnus', 'preferred_address', 'telephone'
    ];

    protected $guarded = array();

    public static $rules = array();

public function index(){

    return view('gallery');
}


}