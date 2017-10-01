@extends('layout.master')
@section('title', 'Add New Car')
@section('content')


    <div class="container-brv">
        <div class="text-center">
            <h2>Thanks for your booking, enjoy your travel</h2>


            <div class="receipt1">
                <h2>RECEIPT</h2>
                <div style="overflow-x:auto;">
                <div class="receipt2">

                    <h3>BOOKING ID: {!! Session::get('bookingDetails')->id !!}</h3>

                    <br>

                    <h3>CAR: {!! Session::get('bookingDetails')->car !!}</h3>

                    <br>

                    <h3>PICKUP: {!! Session::get('bookingDetails')->pickup !!}</h3>

                    <br>

                    <h3>DROPOFF: {!! Session::get('bookingDetails')->dropoff !!}</h3>

                    <br>

                    <h3>DATE: {!! Session::get('bookingDetails')->date !!}</h3>

                    <br>

                    <h3>START TIME: {!! Session::get('bookingDetails')->startTime !!}</h3>

                    <br>

                    <h3>END TIME: {!! Session::get('bookingDetails')->endTime !!}</h3>

                </div>

                </div>

            </div>


        </div>
    </div>
@endsection
