<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarLocation extends Model
{
    protected $fillable=['name','lat','lng'];
}
