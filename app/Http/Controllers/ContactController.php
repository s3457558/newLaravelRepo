<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request)
    {
        session()->put('thanks',  'Thanks for contacting us:');
        session()->put('name',  $request->name);
        session()->put('email',  $request->email);
        session()->put('message',  $request->message);
        return \Redirect::route('contact');
    }
}
