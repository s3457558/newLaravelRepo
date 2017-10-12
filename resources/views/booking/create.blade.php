@extends('layout.master')
@section('title', 'Add a Booking')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Booking Your Car</h2>
                </div>
            </div>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif



    {!! Form::open(['action' => 'BookingController@store']) !!}

    <!--Car selection -->
        <div class="text-center">
            {!! Form::Label('car', 'Select Your Car:')!!}
            <div class="form-group" align="center">
                <select class="form-control" name="car_name">
                    <option id="success" value="car_name">Choose a location to select car</option>
                </select>
            </div>

            <!-- Pickup selection -->
            {!! Form::label('pickup', 'Pickup') !!}
            <div class="form-group" align="center">
                <select class="form-control" name="pickup">
                    <option disabled selected value>Select Your Pickup Location</option>
                    @foreach($carLocations as $carLocation)
                        @if(!$carLocation->cars->isEmpty()))
                        <option id="success" value="{{$carLocation->id}}">{{$carLocation->name}}</option>
                        @endif
                    @endforeach

                </select>
            </div>


            <!--Drop-off selection -->
            {!! Form::label('dropoff', 'Drop-off') !!}
            <div class="form-group" align="center">
                <select class="form-control" name="dropoff">
                    <option disabled selected value>Select Your Drop-off Location</option>
                    @foreach($carLocations as $carLocation)
                        <option value="{{$carLocation->name}}">{{$carLocation->name}}</option>
                    @endforeach
                </select>

            </div>


            <!--Date selection -->
            {!! Form::label('date', 'Date') !!}
            <div class="form-group" align="center">
                {!! Form::date('date', null,array('required','class'=>'form-control','placeholder'=>'Your date here')) !!}
            </div>


            <!--Start time selection -->
            {!! Form::label('startTime', 'Start Time') !!}
            <div class="form-group" align="center">
                {!! Form::time('startTime', null,array('required','class'=>'form-control','placeholder'=>'Start Time')) !!}
            </div>


            <!--End time selection -->
            {!! Form::label('endTime', 'End Time') !!}
            <div class="form-group" align="center">
                {!! Form::time('endTime', null,array('required','class'=>'form-control','placeholder'=>'End Time')) !!}
            </div>

            <button class="btn btn-success" type="submit">Book Now!</button>
            {!! Form::close() !!}
        </div>


    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="pickup"]').on('change', function () {
                console.log(cat_id);
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'get',
                    url: '{!!URL::to('findCarName')!!}',
                    data: {'id': cat_id},
                    success: function (data) {
                        $('select[name="car_name"]').empty();
                        $.each(JSON.parse(data), function (key, value) {
                            $('select[name="car_name"]').append('<option value="' + value.name + '">' + value.name + '</option>');
                        });
                    },
                    error: function () {
                        console.log(" Submit Button Failed");
                    }
                });
            });

        });
    </script>

@endsection