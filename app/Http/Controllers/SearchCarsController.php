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

    $cars=CarLocation::whereBetween('lat',[$lat-0.1,$lat+0.1])
                     ->whereBetween('lng',[$lng-0.1,$lng+0.1])
                     ->get();
    return $cars;
}
}
