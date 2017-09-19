<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Session;

use App\carLocation;

use DB;

class locationController extends Controller
{
    public function create()
    {
    	//$hello = DB::talbe('car_locations')->get();
    	$cars = carLocation::find(1)->cars;
        return view('location',compact('cars'));
    }
   

}