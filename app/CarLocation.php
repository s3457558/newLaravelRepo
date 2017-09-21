<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class CarLocation extends Model
{
    protected $fillable=['name','lat','lng'];

    public function cars(){
        return $this->hasMany('App\Car');
    }
}
