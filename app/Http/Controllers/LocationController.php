<?php

namespace App\Http\Controllers;

use App\CarLocation;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Session;

class locationController extends Controller
{
    public function create()
    {
        return view('location')->with('carLocation',CarLocation::all());
    }
}