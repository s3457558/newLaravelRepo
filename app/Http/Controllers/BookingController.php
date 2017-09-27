<?php

namespace App\Http\Controllers;


use App\CarBookingDetails;
use Illuminate\Http\Request;
use App\Car;
use App\CarLocation;
use App\RecordBookingDetails;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create()
    {
        $cars = Car::all();
        $carLocations = CarLocation::all();
        return view('booking.create', ['cars' => $cars,'carLocations' => $carLocations ]);
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

        $carLocations = CarLocation::all();
        $found = false;
        foreach ($carLocations as $carLocation) {
            if ($carLocation->name == $allRequest['pickup']) {
                foreach ($carLocation->cars as $car) {
                    if ($car->name == $allRequest['car_name']) {
                        $found = true;
                    }
                }
            }
            echo("<script>console.log('PHP: ".json_encode($carLocation->name).$allRequest['pickup']."');</script>");
        }
        if(!$found) {
            $cars = Car::all();
            return view('booking.create', ['cars' => $cars, 'carLocations' => $carLocations])->withErrors('ERROR - The selected car is not in the pickup location');
        }

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
        $bookingDetails->isHistory = 0;
        $bookingDetails->save();


        $request->session()->put('RecordBookingDetails', $record_booking_details);
        $request->session()->put('bookingDetails', $bookingDetails);



        return redirect()->route('thankyou');
    }
}


