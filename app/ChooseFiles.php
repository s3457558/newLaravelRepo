<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChooseFiles extends Model
{
    protected  $table = "choose_files";
    public  $fillable = ['filename','filesize_bytes'];
}
