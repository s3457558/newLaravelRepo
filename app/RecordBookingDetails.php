<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordBookingDetails extends Model
{
    protected $fillable = ['car_name','suburb', 'state','date','time'];

    public function record() {
        return $this->hasMany('App\CarBookingDetails');
    }
}
