<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;


class AdminCarController extends Controller
{
    public function index(Request $request)
    {
        $cars= Car::orderBy('id','DESC')->paginate(5);
//        return view('admin.userIndex');/*admin: folder, userIndex: sub-directory*/
        return view('adminCar.index',compact('cars')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }

//    public function create()
//    {
//        return view('adminUser.create');
//    }


    public function show($id)
    {
        $cars_add_detail= Car::find($id);
        return view('adminCar.show',compact('cars_add_detail'));
    }
//
//
    public function edit($id)
    {
        $cars_add_detail= Car::find($id);
        return view('adminCar.edit',compact('cars_add_detail'));
    }
//
//
    public function update(Request $request, $id)
    {
        $cars_add_detail = Car::find($id);
        $cars_add_detail->name = $request->name;
        $cars_add_detail->car_model = $request->car_model;
        $cars_add_detail->price = $request->price;
        $cars_add_detail->status = $request->status;
        $cars_add_detail->save();
//        return redirect()->route('its.index') ->with('success','Comment uploaded successfully');
//        return view('admin.show',compact('booking'));

        $request->session()->put('car_add', $cars_add_detail);
        return redirect()->route('adminCar.index')->with('success','Car information updated successfully');
//        return redirect()->route('admin.show') ->with('success','Booking detail updated successfully');

//        $this->validate($request, [
//            'suburb' => 'required',
//            'postcode' => 'required',
//        ]);
//        CarBookingDetails::find($id)->update($request->all());
//        return redirect()->route('admin.index') ->with('success','Booking detail updated successfully');
    }
//
    public function destroy($id)
    {
        Car::find($id)->delete();
        return redirect()->route('adminCar.index') ->with('success','Car detail deleted successfully');
    }
}
