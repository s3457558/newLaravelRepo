<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_booking_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Record_car_name');
            $table->string('Record_suburb');
            $table->string('Record_state');
            $table->string('Record_date');
            $table->string('Record_time');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_booking_details');
    }
}
