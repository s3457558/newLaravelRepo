<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecordBookingDetails extends Model
{
    protected $fillable = ['suburb', 'state','date','time'];
}
