<?php

namespace App\Http\Controllers;
use App\CarBookingDetails;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index(Request $request)
    {
        $return_car_details= CarBookingDetails::orderBy('id','DESC')->paginate(5);
        return view('return.index',compact('return_car_details')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('return.create');
    }


    public function destroy($id)
    {
        CarBookingDetails::find($id)->delete();
        return redirect()->route('return.index') ->with('success','You return the car successfully');
    }
}