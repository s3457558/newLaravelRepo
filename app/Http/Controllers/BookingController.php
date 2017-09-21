<?php

namespace App\Http\Controllers;

use App\CarBooking;
use App\CarBookingDetails;
use Illuminate\Http\Request;
use App\Car;
use App\RecordBookingDetails;

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
            'suburb' => 'required',
            'state' => 'required',
            'time' => 'required',
            'date' => 'required',
        ]);


        $allRequest = $request->all();


        $record_booking_details = new RecordBookingDetails();
        $record_booking_details->car_name = $allRequest['car_name'];
        $record_booking_details->suburb = $allRequest['suburb'];
        $record_booking_details->state = $allRequest['state'];
        $record_booking_details->time = $allRequest['time'];
        $record_booking_details->date = $allRequest['date'];
        $record_booking_details->save();



        $bookingDetails = new CarBookingDetails();
        $bookingDetails->car_name = $allRequest['car_name'];
        $bookingDetails->suburb = $allRequest['suburb'];
        $bookingDetails->state = $allRequest['state'];
        $bookingDetails->time = $allRequest['time'];
        $bookingDetails->date = $allRequest['date'];
        $bookingDetails->save();


        $request->session()->put('RecordBookingDetails', $record_booking_details);
        $request->session()->put('bookingDetails', $bookingDetails);
//        $request->session()->put('carDetails', $carDetails);

        return redirect()->route('thankyou');
    }
}


