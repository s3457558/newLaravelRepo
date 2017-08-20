@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">               <!-- Need to change the class name as it will override the login page -->
            <div class="title">
                <h2>Register Form</h2>
            </div>
        </div>
    </div>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {!! Form::open(array('route' => 'register_system', 'class' => 'form')) !!}

    <div class="register-form-group">
        {!! Form::label('Username') !!}
        {!! Form::text('name', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your username')) !!}
    </div>
    <br>
    <div class="register-form-group">
        {!! Form::label('Password') !!}
        {!! Form::text('password', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your password')) !!}
    </div>
    <br>
    <div class="register-form-group">
        {!! Form::label('First Name') !!}
        {!! Form::text('firstname', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your First Name')) !!}
    </div>
    <br>
    <div class="register-form-group">
        {!! Form::label('Last Name') !!}
        {!! Form::text('lastname', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your Last Name')) !!}
    </div>
    <br>
    <div class="register-form-group">
        {!! Form::label('Password') !!}
        {!! Form::password('password',
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your password')) !!}
    </div>
    <br>
    <div class="register-form-group">
        {!! Form::label('Confirm Password') !!}
        {!! Form::password('confirmpassword',
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Confirm your password')) !!}
    </div>
    <br>
    <div class="register-form-group">
        {!! Form::submit('Register',
          array('class'=>'btn btn-primary')) !!}
    </div>

    <br>
    <div class="register-form-group">
        <p>Have an account already? <a href="login">Click here</a> </p>
    </div>




    {!! Form::close() !!}
@endsection