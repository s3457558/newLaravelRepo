<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordBookingDetails extends Model
{
    protected $fillable = ['Record_car_name','Record_suburb', 'Record_state','Record_date','Record_time'];

    public function record() {
        return $this->hasMany('App\CarBookingDetails');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}

