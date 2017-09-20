<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Session;

use App\carLocation;

use App\Car;

use DB;

class locationController extends Controller
{
    public function create()
    {
    	//$hello = DB::talbe('car_locations')->get();
    	$carLocation = carLocation::all();
    	$cars = Car::all();
        return view('location')
        	->with('carLocation',$carLocation)
        	->with('cars',$cars);
    }
   

}