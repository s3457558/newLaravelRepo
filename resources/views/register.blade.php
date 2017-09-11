@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">               <!-- Need to change the class name as it will override the login page -->
            <div class="title">
                <h2>Register Form</h2>
            </div>



    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {!! Form::open(array('route' => 'register_system', 'class' => 'form')) !!}

    <div class="register-form-group">
        {!! Form::label('Username') !!}
        {!! Form::text('username', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your username')) !!}

        <br>
        {!! Form::label('First Name') !!}
        {!! Form::text('firstname', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your First Name')) !!}
        <br>
        {!! Form::label('Last Name') !!}
        {!! Form::text('lastname', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your Last Name')) !!}
        <br>
        {!! Form::label('Postcode') !!}
        {!! Form::text('postcode', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your postcode')) !!}

        <br>
        {!! Form::label('Email') !!}
        {!! Form::text('email', null,
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your Email')) !!}
        <br>
        {!! Form::label('password') !!}
        {!! Form::password('password',
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Enter your password')) !!}
        <br>
        {!! Form::label('Confirm Password') !!}
        {!! Form::password('password_confirmation',
            array('required',
                  'class'=>'register-form-control',
                  'placeholder'=>'Confirm your password')) !!}
        <br>
        {!! Form::label('License file') !!}
        {!! Form::file('') !!}
        <br>
        {!! Form::submit('Register',
          array('class'=>'btn btn-primary')) !!}
    </div>

    <br>
    <h4>Have an account already? <a href="login">Click here</a></h4>



    {!! Form::close() !!}
        </div>
    </div>
@endsection