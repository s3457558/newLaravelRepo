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
    $id=$request->id;

    $cars=CarLocation::whereBetween('lat',[$lat-50,$lat+50])
                     ->whereBetween('lng',[$lng-50,$lng+50])
                     ->whereBetween('id',[$id-0,$id+999])
                     ->get();
    return $cars;
}
	/*public function searchId(Request $request){
		$id=$request->id;
		$newId=CarLocation::whereBetween()
	}*/
}
