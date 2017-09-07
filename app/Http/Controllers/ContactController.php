<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;

class ContactController extends Controller
{
    public function create()
    {
//        $contact = new Contactus;
        return view('contact');
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);


//        Car::create($request->all());
        $allRequest = $request->all();

        $contactuses = new Contactus;
        $contactuses->name = $allRequest['name'];
        $contactuses->email = $allRequest['email'];
        $contactuses->phone = $allRequest['phone'];
        $contactuses->message = $allRequest['message'];
        $contactuses->save();

//        $request->session()->put('car_detail', $cars);
        return redirect()->route('contact') ->with('success','Contact us successfully');
//        return redirect()->route('contact');
    }
}