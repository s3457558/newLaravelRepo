@extends('layout.master')

@section('title','location')

@section('content')
<div class="container">

		<div id="map"></div>

		{!! Form::open() !!}

        {!! Form::select('size', ['L' => 'Large', 'S' => 'Small']) !!}

        {!! Form::close() !!}
	
</div>


@endsection