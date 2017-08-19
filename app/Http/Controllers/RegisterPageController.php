<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Session;

class RegisterPageController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function doRegister(){

        $user = new User;
        $firstname =Input::get('firstname');
        $lastname = Input::get('lastname');
        $user->name = $firstname." ".$lastname;
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->save();
        $userName = Input::get('username');
        return view('home');


    }


}