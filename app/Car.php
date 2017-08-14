<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

    protected $fillable = [ 'name', 'model', 'price' ];

    public function car_bookings() {
        return $this->hasMany('App\CarBooking');
    }
}
