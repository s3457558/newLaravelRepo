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
            'model' => 'required',
        ]);
        Car::create($request->all());
        return redirect()->route('car.create') ->with('success','Car added successfully');
    }
}
