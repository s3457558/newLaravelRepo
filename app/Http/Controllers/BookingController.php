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
            'item_id' => 'required',
            'address_line_1' => 'required',
            'suburb' => 'required|Unique:users|Between:10,20|AlphaNum',
            'state' => array('regex:/^(0[289][0-9]{4})$/'),
        ]);

        $allRequest = $request->all();
        $bookingDetails = new CarBookingDetails();
        $bookingDetails->address_line_1 = $allRequest['address_line_1'];
        $bookingDetails->suburb = $allRequest['suburb'];
        $bookingDetails->state = $allRequest['state'];
        $bookingDetails->save();




//        $allRequest = $request->all();
//        $carDetails = new CarDetails();
//        $carDetails->name = $allRequest['name'];
//        $carDetails->model = $allRequest['model'];
//        $carDetails->price = $allRequest['price'];
//        $carDetails->save();



        $request->session()->put('bookingDetails', $bookingDetails);
//        $request->session()->put('carDetails', $carDetails);

        return redirect()->route('thankyou');
    }
}


