<?php

namespace App\Http\Controllers;

use App\CarBooking;
use App\CarBookingDetails;
use Illuminate\Http\Request;
use App\Car;

class BookingController extends Controller
{
    //

    public function create()
    {
        $cars = Car::all();
        return view('booking.create', ['cars' => $cars ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'item_id' => 'required',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'suburb' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        $allRequest = $request->all();
        $car_booking = new CarBooking();
        $car_booking->name = $allRequest['name'];
        $car_booking->email = $allRequest['email'];
        $car_booking->car_id = $allRequest['item_id'];
        $car_booking->save();

        $bookingDetails = new CarBookingDetails();
        $bookingDetails->address_line_1 = $allRequest['address_line_1'];
        $bookingDetails->address_line_2 = $allRequest['address_line_2'];
        $bookingDetails->suburb = $allRequest['suburb'];
        $bookingDetails->state = $allRequest['state'];
        $bookingDetails->country = $allRequest['country'];
        $bookingDetails->booking_id = $car_booking->id;
        $bookingDetails->save();

        /*
         * Using sessions
         * */
        $request->session()->put('bookingDetails', $bookingDetails);
        $request->session()->put('name', $car_booking->name);

        return redirect()->route('thankyou');
    }
}
