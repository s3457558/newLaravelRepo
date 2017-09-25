<?php

namespace App\Http\Controllers;

use App\CarBooking;
use App\CarBookingDetails;
use Illuminate\Http\Request;
use App\Car;
use App\RecordBookingDetails;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create()
    {
        $cars = Car::all();
        return view('booking.create', ['cars' => $cars ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'car_name' => 'required',
            'pickup' => 'required',
            'dropoff' => 'required',
            'date' => 'required|after:today',
            'startTime' => 'required',
            'endTime' => 'required',
        ]);


        $allRequest = $request->all();


        $record_booking_details = new RecordBookingDetails();
        $record_booking_details->car = $allRequest['car_name'];
        $record_booking_details->pickup = $allRequest['pickup'];
        $record_booking_details->dropoff = $allRequest['dropoff'];
        $record_booking_details->date = $allRequest['date'];
        $record_booking_details->startTime = $allRequest['startTime'];
        $record_booking_details->endTime = $allRequest['endTime'];
        $record_booking_details->user_id = Auth::user()->id;
        $record_booking_details->save();


        $bookingDetails = new CarBookingDetails();
        $bookingDetails->car = $allRequest['car_name'];
        $bookingDetails->pickup = $allRequest['pickup'];
        $bookingDetails->dropoff = $allRequest['dropoff'];
        $bookingDetails->date = $allRequest['date'];
        $bookingDetails->startTime = $allRequest['startTime'];
        $bookingDetails->endTime = $allRequest['endTime'];
        $bookingDetails->user_id = Auth::user()->id;
        $bookingDetails->save();


        $request->session()->put('RecordBookingDetails', $record_booking_details);
        $request->session()->put('bookingDetails', $bookingDetails);

        return redirect()->route('thankyou');
    }
}


