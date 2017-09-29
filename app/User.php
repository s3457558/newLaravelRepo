<?php

namespace App;
use App\CarBookingDetails;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin(){
        return $this->admin;
    }

    public function isRecord(){
        return $this->record;
    }

    public function carBooking(){
        return $this->hasMany('App\CarBookingDetails');
    }

//    public function user(){
//        return $this->belongsTo('App\User');
//    }
}
