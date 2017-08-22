@extends('layout.master')
@section('title', 'Add New Car')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thank You</h2>
            </div>
        </div>
    </div>

    {{--<p>State: {!! Session::get('carDetails')->name !!}</p>--}}
    {{--<p>State: {!! Session::get('carDetails')->model !!}</p>--}}
    {{--<p>State: {!! Session::get('carDetails')->price !!}</p>--}}
    {{--<p>Car: {!! Session::get('bookingDetails')->address_line_1 !!}--}}
    <p>Address: {!! Session::get('bookingDetails')->address_line_1 !!}
    <p>Suburb: {!! Session::get('bookingDetails')->suburb !!}</p>
    <p>State: {!! Session::get('bookingDetails')->state !!}</p>
    {{--@if(!empty(Session::get('name')))--}}
        {{--<p>Thanks {!! Session::get('name') !!},</p>--}}
        {{--<b>Below are the details</b>--}}
        {{----}}
            {{--{!! Session::get('bookingDetails')->address_line_2 !!}</p>--}}

        {{--<p>Country: {!! Session::get('bookingDetails')->country !!}</p>--}}
    {{--@endif--}}
@endsection






