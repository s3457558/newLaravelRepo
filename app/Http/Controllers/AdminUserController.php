<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $users= User::orderBy('id','DESC')->paginate(5);
//        return view('admin.userIndex');/*admin: folder, userIndex: sub-directory*/
        return view('adminUser.index',compact('users')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }

//    public function create()
//    {
//        return view('adminUser.create');
//    }


//    public function showFile($id)
//    {
//        $file = File::find($id);
//        return view('adminUser.license',compact('file'));
//    }


    public function show($id)
    {
        $users_detail= User::find($id);

        return view('adminUser.showUser',compact('users_detail'));
    }
//
//
//    public function edit($id)
//    {
//        $booking= CarBookingDetails::find($id);
//        return view('admin.edit',compact('booking'));
//    }
//
//
//    public function update(Request $request, $id)
//    {
//        $booking = CarBookingDetails::find($id);
//        $booking->suburb = $request->suburb;
//        $booking->state = $request->state;
//        $booking->save();
////        return redirect()->route('its.index') ->with('success','Comment uploaded successfully');
////        return view('admin.show',compact('booking'));
//        return redirect()->route('admin.index')->with('success','Booking updated successfully');
////        return redirect()->route('admin.show') ->with('success','Booking detail updated successfully');
//
////        $this->validate($request, [
////            'suburb' => 'required',
////            'postcode' => 'required',
////        ]);
////        CarBookingDetails::find($id)->update($request->all());
////        return redirect()->route('admin.index') ->with('success','Booking detail updated successfully');
//    }
//
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('adminUser.index') ->with('success','User detail deleted successfully');
    }
}
