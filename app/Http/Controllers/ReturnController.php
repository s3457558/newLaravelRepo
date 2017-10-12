<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarBookingDetails;
use App\CarLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnController extends Controller
{
    public function index(Request $request)
    {
        $return_car_details = CarBookingDetails::orderBy('id', 'DESC')->paginate(5);
        return view('return.index', compact('return_car_details'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('return.create');
    }


    public function destroy($id)
    {

        $carLocations = CarLocation::all();
        $cars = Car::all();
        $carBooking = CarBookingDetails::find($id);
        foreach ($carLocations as $carLocation) {
            if ($carLocation->name == $carBooking->dropoff) {
                foreach ($cars as $car) {
                    if ($car->name == $carBooking->car) {
                        echo("<script>console.log('CAR NAME AND CAR CAR LOCATION FOUND');</script>");
                        DB::table('cars')
                            ->where('name', $car->name)
                            ->update(['car_location_id' => $carLocation->id]);
                    }
                }
            }
        }
        DB::table('car_booking_details')
            ->where('id', $id)
            ->update(['isHistory' => 1]);


        return redirect()->route('return.index')->with('success', 'You return the car successfully');
    }
}