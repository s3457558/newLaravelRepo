<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_booking_details', function (Blueprint $table) {
            $table->increments('id');

            /*
             * Other columns in the table
             */
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('suburb');
            $table->string('state');
            $table->string('country');


            /**
             * Create a column
             *
             * Give a foreign key constraint for the booking id
             *
             * OnDelete will add a constraint by which if the booking is
             * removed then all the addresses associated to
             * the booking will be removed as well
             */
            $table->integer('booking_id')->unsigned();
            $table->foreign('booking_id')
                ->references('id')->on('car_bookings')
                ->onDelete('cascade');

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
        Schema::dropIfExists('car_booking_details');
        Schema::dropIfExists('car_bookings');

    }
}
