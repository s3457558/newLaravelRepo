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
            $table->string('car');
            $table->string('pickup');
            $table->string('dropoff');
            $table->string('date');
            $table->boolean('isHistory');
            $table->string('startTime');
            $table->string('endTime');

            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('car_booking_details');
        Schema::dropIfExists('car_bookings');
    }
}
