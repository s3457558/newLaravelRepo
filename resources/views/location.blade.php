@extends('layout.master')

@section('title','location')

@section('content')
<div class="container">
	<div class="new">

	<div class="form-group">
		<lable for="">search</lable>
		<input type="text" id="searchmap"></input>
        <button type="button" class="find-me btn btn-info btn-block">Find My Location</button>
		<div id="map"></div>
	</div>

	</div>

	
</div>


@endsection