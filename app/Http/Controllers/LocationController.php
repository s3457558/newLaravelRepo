<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\CarLocation;
use App\Car;
use DB;
use Carbon\Carbon;

class LocationController extends Controller
{
    public function create()
    {

        return view('location')->with('carLocation', CarLocation::all())->with('car', Car::all());

    }

    public function findCarName(Request $request)
    {
        $cars = Car::select('name', 'id')->where('car_location_id', $request->id)->take(100)->get();

        // return response()->json($data);
        return json_encode($cars);
    }

    public function getAvailableCars(Request $request)
    {
        if ($request['date'] == null) {
            return view('location')->with('carLocation', CarLocation::all())->with('car', Car::all());
        }
        $date = $request['date'];
        $startTime = $request['startTime'];
        $endTime = $request['endTime'];
        $startOfBooking = Carbon::createFromFormat('Y-m-d H:i', $date . " " . $startTime);
        $endOfBooking = Carbon::createFromFormat('Y-m-d H:i', $date . " " . $endTime);
        $allBookings = CarBookingDetails::all();
        $availableCars = array();

        foreach ($allBookings as $booking) {
            $existingBookingStartTime = Carbon::createFromFormat('Y-m-d H:i', $booking->date . " " . $booking->startTime);
            $existingBookingEndTime = Carbon::createFromFormat('Y-m-d H:i', $booking->date . " " . $booking->endTime);

            //Will add the names of the cars if there's a clash in the bookings
            if ($this->checkIfBookingsAreOnSameDay($startOfBooking, $existingBookingStartTime)
                || $this->checkIfBookingsAreOnSameDay($startOfBooking, $existingBookingEndTime)
                || $this->checkIfBookingsAreOnSameDay($endOfBooking, $existingBookingStartTime)
                || $this->checkIfBookingsAreOnSameDay($endOfBooking, $existingBookingEndTime)) {
                if ($startOfBooking->between($existingBookingStartTime, $existingBookingEndTime)
                    || $endOfBooking->between($existingBookingStartTime, $existingBookingEndTime)) {
                    array_push($availableCars, $existingBookingStartTime->car);
                }
            } else {
                array_push($availableCars, $existingBookingStartTime->car);
//              add car to an array
            }
        }
        $cars = Car::all();
        return json_encode($cars);
        //return json_encode($availableCars);
//        echo("<script>console.log('PHP: Length of cars array " . count($availableCars) . "');</script>");
//        echo("<script>console.log('PHP: " . $date . "');</script>");
//        echo("<script>console.log('PHP: " . $startTime . "');</script>");
//        echo("<script>console.log('PHP: " . $endTime . "');</script>");
//        echo("<script>console.log('PHP: Carbon day " . $startOfBooking->day . "');</script>");
//        echo("<script>console.log('PHP: Carbon Start time " . $startOfBooking . "');</script>");
//        echo("<script>console.log('PHP: Carbon End time " . $endOfBooking . "');</script>");
//        return json_encode($availableCars);
    }

    private function checkIfBookingsAreOnSameDay(Carbon $userBooking, Carbon $existingBooking) {
        if ($userBooking->day == $existingBooking->day && $userBooking->month == $existingBooking)
            return true;
        return false;
    }


}