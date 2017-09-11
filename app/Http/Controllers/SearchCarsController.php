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

    $cars=CarLocation::whereBetween('lat',[$lat-50,$lat+50])
                     ->whereBetween('lng',[$lng-50,$lng+50])
                     ->get();
    return $cars;
}
}
