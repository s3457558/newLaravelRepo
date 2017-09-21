<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CarLocation;

class Car extends Model
{
    protected $fillable = [ 'name', 'car_model', 'price','isBooked','status'];

    public function carLocation(){
        return $this->belongsTo('App\CarLocation');
    }

}
