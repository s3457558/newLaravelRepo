<?php

namespace App\Http\Controllers;
use App\CarBookingDetails;
use App\RecordBookingDetails;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(Request $request)
    {
        return view('record.index')->with('bookings', CarBookingDetails::all());
    }
    public function create()
    {
        return view('record.create');
    }
}