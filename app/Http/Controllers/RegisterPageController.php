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

    public function doRegister(Request $request){

        $this->validate($request, [
            'username'              => 'required|Unique:users|Between:5,20|AlphaNum',
            'password'              => array( 'required','Between:6,20','Confirmed',
                                        'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'),
            'password_confirmation' => array( 'required','Between:6,20',
                                        'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'),
            'firstname'             => 'required|Alpha|max:20',
            'lastname'              => 'required|Alpha|max:20'
        ]);
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