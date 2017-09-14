<?php

namespace App\Http\Controllers;



use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;



class locationController extends Controller
{
    public function create()
    {

        return view('location');


    }
}


