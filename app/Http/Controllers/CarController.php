<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    //

    public function create()
    {
        $car = new Car;
        return view('car.create', ['car' => $car ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'car_model' => 'required'
//            'status' => 'required',
//            'isBooked' => 'required',
        ]);


//        Car::create($request->all());
        $allRequest = $request->all();

        $cars = new Car();
        $cars->name = $allRequest['name'];
        $cars->car_model = $allRequest['car_model'];
        $cars->price = $allRequest['price'];
        $cars->status = 'Available';
        $cars->isBooked = 0;
        $cars->save();

//        $request->session()->put('car_detail', $cars);
        return redirect()->route('car.create') ->with('success','Car added successfully');
    }
}