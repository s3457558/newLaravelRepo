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

        $username = $request->input('username');
        $password = 'Hello123!';

        if(Auth::attempt(['email' => $username, 'password' => $password ])){
            return \redirect()->intended('home');
        }
        return view('login')->withErrors("ERROR logging in!");

    }


}
