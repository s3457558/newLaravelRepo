@extends('layout.master')

@section('title','location')

@section('content')
<div class="container">

		<div id="map"></div>

		{!! Form::open() !!}

        {!! Form::select('size', ['L' => 'Large', 'S' => 'Small']) !!}

        {!! Form::close() !!}
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Select Your Car</h2>
            </div>
            <div class="modal-body">

                <p>Car One Place Holder
                    <a href="register" class="button white-text3">
                        <span>Book</span>
                    </a></p>

                <p>Car Two Place Holder
                    <a href="register" class="button white-text3">
                        <span>Book</span>
                    </a></p>
            </div>
            <div class="modal-footer">
                <h3>   </h3>
            </div>
        </div>

    </div>
	
</div>


@endsection