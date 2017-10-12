<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ViewProfileController extends Controller
{


    public function index(Request $request)
    {

        $users_profile= User::orderBy('id','DESC')->paginate(5);
        return view('profile.index',compact('users_profile')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }
//    public function create(){
//
//        return view('profile.create');
//    }


    public function edit($id)
    {
        $users_detail_profile= User::find($id);
        return view('profile.edit',compact('users_detail_profile'));
    }

    public function update(Request $request, $id)
    {
        $users_detail_profile = User::find($id);
        $users_detail_profile->username = $request->username;
        $users_detail_profile->name = $request->name;
        $users_detail_profile->email = $request->email;
        $users_detail_profile->postcode = $request->postcode;
        $users_detail_profile->save();
//        return redirect()->route('its.index') ->with('success','Comment uploaded successfully');
//        return view('admin.show',compact('booking'));

        $request->session()->put('profile_add', $users_detail_profile);
        return redirect()->route('profile.index')->with('success','Your personal details updated successfully');}
}
