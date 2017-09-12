@extends('layout.master')

@section('title','location')

@section('content')
<div class="container">
    <div class="content">
    <div class="title">
        <h2>Find Location</h2>
    </div>
    <h4>Enter your start location:</h4>
    <input type="text" id="start-input" class="controls" placeholder="Start location">
    <h4>Enter your end location:</h4>
    <input type="text" id="end-input" class="controls" placeholder="Destination location">

    <div id="selection" class="controls">
        <input type="radio" name="type" id="changemode-walking" checked="checked">
        <label for="changemode-walking">Walking</label>

        <input type="radio" name="type" id="changemode-transit">
        <label for="changemode-transit">Transit</label>

        <input type="radio" name="type" id="changemode-driving">
        <label for="changemode-driving">Driving</label>
    </div>
        <div id="dvDistance"></div>

    <input id="pac-input" class="controls" type="text" placeholder="Search Box">

    <div id="map"></div>

    <div id="myModal" class="modal">


        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Select Your Car</h2>
            </div>
            <div class="modal-body">

                <p>Car One Place Holder
                    @if(!\Illuminate\Support\Facades\Auth::guest())
                        <a href="booking.create" class="button white-text3">
                            <span>Book</span></a>
                    @endif

                    @if(!\Illuminate\Support\Facades\Auth::check())
                        <a href="login" class="button white-text3">
                            <span>Book</span></a>
                    @endif

                </p>

                <p>Car Two Place Holder
                    @if(!\Illuminate\Support\Facades\Auth::guest())
                        <a href="booking.create" class="button white-text3">
                            <span>Book</span></a>

                    @endif
                    @if(!\Illuminate\Support\Facades\Auth::check())
                        <a href="login" class="button white-text3">
                            <span>Book</span></a>
                    @endif
                </p>
            </div>
            
            <div class="modal-footer">
                <h3>   </h3>
            </div>
        </div>



</div>

@endsection