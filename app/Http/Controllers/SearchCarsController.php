<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\CarLocation;
use Illuminate\Http\Request;

class SearchCarsController extends Controller
{
public function searchCars(Request $request){
    $lat=$request->lat;
    $lng=$request->lng;

    $car_locations=CarLocation::whereBetween('lat',[$lat-1,$lat+1])->whereBetween('lng',[$lng-1,$lng+1])->get();
    return $car_locations;
}
}
