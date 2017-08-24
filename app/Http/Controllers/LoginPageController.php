<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;




use Illuminate\Support\Facades\Session;

class LoginPageController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function doLogin(Request $request){

        $rules = array(
            'username'  =>'required',
            'password'  => 'required'
        );

        $email = Input::get('username');
        $password = Input::get('password');

        if(Auth::attempt(['email' => $email, 'password' => $password ])){
            return view('home');
        }
        return view('login')->withErrors($email);

    }

    public function username () {
        return 'username';
    }


}
