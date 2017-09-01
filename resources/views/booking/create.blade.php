@extends('layout.master')
@section('title', 'Add a Booking')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Booking your car</h2>
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

    <div class="form-group">
        {!! Form::Label('car', 'Car (Choose your car here):')!!}
        <select class="form-control" name="item_id">
            @foreach($cars as $car)
                <option value="{{$car->id}}">{{$car->name}}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
    {!! Form::label('address_line_1', 'Address') !!}
    {!! Form::text('address_line_1', null,array('required','class'=>'form-control','placeholder'=>'Your address here')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('suburb', 'Suburb') !!}
        {!! Form::text('suburb', null,array('required','class'=>'form-control','placeholder'=>'Your suburb here')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('state', 'Postcode') !!}
        {!! Form::text('state', null,array('required','class'=>'form-control','placeholder'=>'Your postcode here')) !!}
    </div>


    <div class="form-group">
    {!! Form::label('date', 'Date') !!}
    <input type = "date" name = "field1"/><br /><br />
    {{--{!! Form::text('time', null,array('required','class'=>'form-control','placeholder'=>'Your time here')) !!}--}}
    </div>



    <div class="form-group">
        {!! Form::label('time', 'Time') !!}
        {{--<select name="Time" id="form-control">--}}
            {{--<option>{{$->time}}</option>--}}
            {{--<option>AM</option>--}}
            {{--<option>PM</option>--}}
        {{--</select>--}}
        {!! Form::text('time', null,array('required','class'=>'form-control','placeholder'=>'Your time here')) !!}

    </div>



    <button class="btn btn-success" type="submit">Book Now!</button>

    {!! Form::close() !!}
@endsection



{{--<div class="form-group">--}}
{{--{!! Form::label('name', 'Name') !!}--}}
{{--{!! Form::text('name', '', ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--{!! Form::label('email', 'Email') !!}--}}
{{--{!! Form::text('email', '', ['class' => 'form-control']) !!}--}}
{{--</div>--}}



{{--<div class="form-group">--}}
{{--{!! Form::text('address_line_2', '', ['class' => 'form-control']) !!}--}}
{{--</div>--}}


{{--<div class="form-group">--}}
    {{--{!! Form::label('country', 'Country') !!}--}}
    {{--{!! Form::text('country', '', ['class' => 'form-control']) !!}--}}
{{--</div>--}}