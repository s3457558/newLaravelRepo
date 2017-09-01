@extends('layout.master')
@section('title', 'Add New Car')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thanks for your booking, enjoy your travel</h2>
            </div>
        </div>
    </div>

    {{--<p>State: {!! Session::get('carDetails')->name !!}</p>--}}
    {{--<p>State: {!! Session::get('carDetails')->model !!}</p>--}}
    {{--<p>State: {!! Session::get('carDetails')->price !!}</p>--}}
    {{--<p>Car: {!! Session::get('bookingDetails')->address_line_1 !!}--}}
    <h4>Address: {!! Session::get('bookingDetails')->address_line_1 !!}</h4>
    <h4>Suburb: {!! Session::get('bookingDetails')->suburb !!}</h4>
    <h4>State: {!! Session::get('bookingDetails')->state !!}</h4>
    <h4>Date: {!! Session::get('bookingDetails')->date !!}</h4>
    <h4>Time: {!! Session::get('bookingDetails')->time !!}</h4>
    {{--@if(!empty(Session::get('name')))--}}
        {{--<p>Thanks {!! Session::get('name') !!},</p>--}}
        {{--<b>Below are the details</b>--}}
        {{----}}
            {{--{!! Session::get('bookingDetails')->address_line_2 !!}</p>--}}

        {{--<p>Country: {!! Session::get('bookingDetails')->country !!}</p>--}}
    {{--@endif--}}
@endsection






