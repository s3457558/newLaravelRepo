@extends('admin.master')
@section('title', 'Add New Car and dummy address')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                <h2>Add New Car and dummy address</h2>
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


            {!! Form::model($car, ['action' => 'CarController@store']) !!}


            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null,array('required','class'=>'form-control','placeholder'=>'Your add car name here')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('car_model', 'Model') !!}
                {!! Form::text('car_model', null,array('required','class'=>'form-control','placeholder'=>'Your add car model here')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', null,array('required','class'=>'form-control','placeholder'=>'Your add car price here')) !!}
            </div>



            {{--{!! Form::model($car, ['method' => 'PATCH','route' => ['car.create', $car->id]]) !!}--}}
            {{--<div class="form-=group">--}}
                {{--{!! Form::label('status', 'Status') !!}--}}
                {{--<select name="status" id="form-control">--}}
                    {{--<option>{{$car->status}}</option>--}}
                    {{--<option>Available</option>--}}
                    {{--<option>Unavailable</option>--}}
                {{--</select>--}}
            {{--</div>--}}

            {{--<button class="btn btn-success" type="submit">Change</button>--}}
            {{--{!! Form::close() !!}--}}


            {{--<div class="form-group">--}}
                {{--{!! Form::label('dummyAddress', 'Address') !!}--}}
                {{--{!! Form::text('dummyAddress', null,array('required','class'=>'form-control','placeholder'=>'Your add dummy address here')) !!}--}}
            {{--</div>--}}


            <button class="btn btn-success" type="submit">Submit infor</button>

            {!! Form::close() !!}




        </div>
    </div>
@endsection