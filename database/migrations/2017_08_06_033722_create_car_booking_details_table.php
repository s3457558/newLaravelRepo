<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarBookingDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('car_booking_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address_line_1');
            $table->string('suburb');
            $table->string('state');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('car_booking_details');
    }
}
