@extends('layout.master')

@section('title','location')

@section('content')
<div class="container">
	<div class="new">

	<div class="form-group">
		<div class="form-group">
			{!! Form::label('Search your location: ') !!}
			<input type="text" id="searchmap"></input>
		</div>
        <button type="button" class="find-me btn btn-info btn-block">Find My Location</button>
		<div id="map"></div>
	</div>

	</div>

	
</div>


@endsection