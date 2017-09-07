<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');

            /*
             * Other columns in the table
             */
            $table->string('name');
            $table->string('car_model');
            $table->float('price');
            $table->boolean('isBooked');
            $table->string('status');
            $table->timestamps();
        });

//        Schema::table('car_bookings', function ($table) {
//            $table->integer('car_id')->unsigned();
//            $table->foreign('car_id')
//                ->references('id')->on('cars')
//                ->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_booking_details');
        Schema::dropIfExists('car_bookings');
        Schema::dropIfExists('cars');
//
//
//
//
//        Schema::table('cars', function (Blueprint $table) {
//            $table->dropColumn('isBooked');
//        });
    }
}
