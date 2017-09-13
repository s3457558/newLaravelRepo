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
        $car_location_id=$request->car_location_id;

        $car = Car::where('car_location_id', 1)->get();
        return view('location',['car' => $car]);

    }
}


