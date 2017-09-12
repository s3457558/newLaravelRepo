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

		<div id="map"></div>

		{!! Form::open() !!}

        {!! Form::select('size', ['L' => 'Large', 'S' => 'Small']) !!}

        {!! Form::close() !!}
    </div>
</div>


@endsection