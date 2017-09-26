@extends('layout.master')
@section('title', 'Add a Booking')
@section('content')
    <div class="container-brv">

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

            <div class="text-center">
                {!! Form::Label('car', 'Car (Choose your car here):')!!}
            </div>
            <div class="form-group" align="center">
                <select class="form-control" name="car_name">
                    @foreach($cars as $car)
                        <option value="{{$car->name}}">{{$car->name}}</option>
                    @endforeach
                </select>
            </div>

            {{--<div class="form-group">--}}
            <div class="text-center">
                {!! Form::label('suburb', 'Suburb') !!}
            </div>
            <div class="form-group" align="center">
                {!! Form::text('suburb', null,array('required','class'=>'form-control','placeholder'=>'Your suburb here')) !!}
            </div>



            <div class="text-center">
                {!! Form::label('state', 'Postcode') !!}
            </div>
            <div class="form-group" align="center">
                {!! Form::text('state', null,array('required','class'=>'form-control','placeholder'=>'Your postcode here')) !!}
            </div>


            <div class="text-center">
                {!! Form::label('date', 'Date') !!}
            </div>
            <div class="form-group" align="center">
                {!! Form::date('date', null,array('required','class'=>'form-control','placeholder'=>'Your date here')) !!}
            </div>

            <div class="text-center">
                {!! Form::label('time', 'Time') !!}
            </div>
            <div class="form-group" align="center">
                {!! Form::time('time', null,array('required','class'=>'form-control','placeholder'=>'Your time here')) !!}
            </div>

            <div class="text-center">
                <button class="btn btn-success" type="submit">Book Now!</button>
            </div>

            {!! Form::close() !!}



    </div>

@endsection