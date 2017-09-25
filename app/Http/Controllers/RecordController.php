<?php

namespace App\Http\Controllers;
use App\CarBookingDetails;
use App\RecordBookingDetails;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(Request $request)
    {
        $car_details= RecordBookingDetails::orderBy('id','DESC')->paginate(5);
        return view('record.index',compact('car_details')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('record.create');
    }
}