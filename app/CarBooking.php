<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    //
    protected $fillable = [ 'name', 'email' ];

    public function car_id() {
        return $this->belongsTo('App\Car');
    }
}
