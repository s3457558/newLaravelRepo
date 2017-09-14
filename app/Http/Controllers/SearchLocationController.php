<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarLocation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;


class SearchLocationController extends Controller
{
    public function searchLocation(Request $request)
    {
        $car_location_id=$request->input('name');
        $car = CarLocation::where('name', $car_location_id)->get();
        return view('location',compact('car'));


    }
}


