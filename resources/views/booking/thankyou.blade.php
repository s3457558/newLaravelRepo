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
    @if(!empty(Session::get('name')))
        <p>Thanks {!! Session::get('name') !!},</p>
        <b>Below are the details</b>
        <p>Address: {!! Session::get('bookingDetails')->address_line_1 !!}
            {!! Session::get('bookingDetails')->address_line_2 !!}</p>
        <p>Suburb: {!! Session::get('bookingDetails')->suburb !!}</p>
        <p>State: {!! Session::get('bookingDetails')->state !!}</p>
        <p>Country: {!! Session::get('bookingDetails')->country !!}</p>
    @endif
@endsection