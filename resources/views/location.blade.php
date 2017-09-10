@extends('layout.master')

@section('title','location')

@section('content')
<div class="container">

		<div id="map"></div>

		{!! Form::open() !!}

        {!! Form::label('district','District') !!}

        {!! Form::select('district', ['L' => 'Ktm', 'S' => 'Lalitpur']) !!}

        <div id="city">



        </div>

        {!! Form::close() !!}
	
</div>


@endsection