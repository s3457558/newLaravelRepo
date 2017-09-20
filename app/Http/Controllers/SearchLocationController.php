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
        $name=$request->input('name');

        $cars = CarLocation::where('name',$name)->get();
        return view('location',compact('cars'));


    }
}


