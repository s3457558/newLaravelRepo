<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarLocation;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Session;

class locationController extends Controller
{
    public function create(Request $request)
    {
        $car_location_id=$request->input('name','harry');
        $car = CarLocation::where('name', $car_location_id)->get();
        return view('location',compact('car'));


    }
}


