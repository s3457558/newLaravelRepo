{{--@extends('layout.master')--}}
{{--@section('title', 'Add New Car')--}}
{{--@section('content')--}}
    {{--<div class="row">--}}
        {{--<div class="col-lg-12 margin-tb">--}}
            {{--<div class="pull-left">--}}
                {{--<h2>Thanks for your booking, enjoy your travel</h2>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{----}}
    {{--<h4>Booking id: {!! Session::get('bookingDetails')->id !!}</h4>--}}
    {{--<h4>Suburb: {!! Session::get('bookingDetails')->suburb !!}</h4>--}}
    {{--<h4>State: {!! Session::get('bookingDetails')->state !!}</h4>--}}
    {{--<h4>Date: {!! Session::get('bookingDetails')->date !!}</h4>--}}
    {{--<h4>Time: {!! Session::get('bookingDetails')->time !!}</h4>--}}
{{--@endsection--}}































@extends('layout.master')
@section('title', 'Add New Car')
@section('content')





    <div class="container-brv">
        <div class="text-center">
            <h2>Thanks for your booking, enjoy your travel</h2>



            <div class="receipt1">
                <h2>Receipt</h2>

                <div class="receipt2">

                    <h3>Booking id: {!! Session::get('bookingDetails')->id !!}</h3>

                    <br>

                    <h3>Suburb: {!! Session::get('bookingDetails')->suburb !!}</h3>

                    <br>

                    <h3>State: {!! Session::get('bookingDetails')->state !!}</h3>

                    <br>

                    <h3>Date: {!! Session::get('bookingDetails')->date !!}</h3>

                    <br>

                    <h3>Time: {!! Session::get('bookingDetails')->time !!}</h3>


                </div>

            </div>




        </div>
    </div>
@endsection
