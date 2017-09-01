<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBookingDetails extends Model
{
    protected $fillable = [ 'address_line_1', 'suburb', 'state','time'];
//    protected $fillable = [ 'address_line_1', 'address_line_2', 'suburb',
//        'state', 'country' ];
}
