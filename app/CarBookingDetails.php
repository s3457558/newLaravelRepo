<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBookingDetails extends Model
{
    protected $fillable = ['car_name','suburb', 'state','date','time'];
}
