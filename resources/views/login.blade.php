@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')

    <div class="container">
        <div class="content">
            <div class="size">
            <div class="title">
                <h2>Login</h2>
             </div>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{Form::open(array('url' => 'login')) }}

    <div class="login-form-group">
        {!! Form::label('Email') !!}
        {!! Form::text('email', null,
            array('required',
                  'class'=>'login-form-control',
                  'placeholder'=>'Enter your username')) !!}
    </div>
    <br>
    <div class="login-form-group">
            {!! Form::label('Password') !!}
            {!! Form::password('password',
                array('required',
                      'class'=>'login-form-control',
                      'placeholder'=>'Enter your password')) !!}
    </div>
    <br>

    <div class="login-form-group">
        {!! Form::submit('LogIn',
          array('class'=>'button2 btn btn-primary')) !!}
    </div>
    <br>
    <div class="login-form-group">
        <h4>Not the member yet? <a href="register">Sign up a new account</a> </h4>
    </div>


    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
