@extends('layout.master')
@section('title', 'Add a Booking')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                <h2>Booking Your Car</h2>
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


        <div class="container-brv">
        {!! Form::open(['action' => 'BookingController@store']) !!}

        <!--Car selection -->
            <div class="text-center">
                {!! Form::Label('car', 'Select Your Car:')!!}
                <div class="form-group" align="center">
                    <select class="form-control" name="car_name">
                        @foreach($cars as $car)
                            <option value="{{$car->id}}">{{$car->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Pickup selection -->
                {!! Form::label('pickup', 'Pickup') !!}
                <div class="form-group" align="center">
                    {!! Form::text('pickup', null,array('required','class'=>'form-control','placeholder'=>'Pickup Location')) !!}
                </div>


                <!--Drop-off selection -->
                {!! Form::label('dropoff', 'Drop-off') !!}
                <div class="form-group" align="center">
                    {!! Form::text('dropoff', null,array('required','class'=>'form-control','placeholder'=>'Drop-off Location')) !!}
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
    </div>



    </div>
    </div>
@endsection