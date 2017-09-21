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

        return view('location')->with('carLocation',CarLocation::all())->with('car',Car::all());

    }
   

}