@extends('layout.master')
@section('title', 'Add New Car')
@section('content')
    <div class="container">
        <div class="content">
            <div class="size">
            <div class="title">
                <h2>Add New Car</h2>
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
        {!! Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name the car']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('model', 'Model') !!}
        {!! Form::text('model', '', ['class' => 'form-control', 'placeholder'=>'Name the model']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price') !!}
        {!! Form::text('price', '', ['class' => 'form-control', 'placeholder'=>'Price']) !!}
    </div>

    <button class="btn btn-success" type="submit">Add Car!</button>

    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection