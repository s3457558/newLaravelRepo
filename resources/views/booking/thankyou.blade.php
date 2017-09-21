@extends('layout.master')
@section('title', 'Add New Car')
@section('content')





    <div class="container-brv">
        <div class="text-center">
            <h2>Thanks for your booking, enjoy your travel</h2>



            <div class="receipt1">
                <h2>RECEIPT</h2>

                <div class="receipt2">

                    <h3>BOOKING ID: {!! Session::get('bookingDetails')->id !!}</h3>

                    <br>

                    <h3>SUBURB: {!! Session::get('bookingDetails')->suburb !!}</h3>

                    <br>

                    <h3>STATE: {!! Session::get('bookingDetails')->state !!}</h3>

                    <br>

                    <h3>DATE: {!! Session::get('bookingDetails')->date !!}</h3>

                    <br>

                    <h3>TIME: {!! Session::get('bookingDetails')->time !!}</h3>


                </div>

            </div>




        </div>
    </div>
@endsection
