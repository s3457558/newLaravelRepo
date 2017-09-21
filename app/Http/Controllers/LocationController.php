<?php

namespace App\Http\Controllers;

use App\CarLocation;
use App\Car;
use Illuminate\Http\Request;


use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;



class locationController extends Controller
{
    public function create()
    {

        return view('location')->with('carLocation',CarLocation::all())->with('car',Car::all());

    }
}


