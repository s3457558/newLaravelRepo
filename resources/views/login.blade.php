@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')

    <div class="container">
        <div class="content">
            <div class="title">
                <h2>Login</h2>
             </div>
        </div>
    </div>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {!! Form::open(array('route' => 'login_system', 'class' => 'form')) !!}

    <div class="login-form-group">
        {!! Form::label('Username') !!}
        {!! Form::text('name', null,
            array('required',
                  'class'=>'login-form-control',
                  'placeholder'=>'Enter your username')) !!}
    </div>
    <br>
    <div class="login-form-group">
        {!! Form::label('Password') !!}

       <!--This ruins the formatting but we need it to be blank :( -->
            {{ Form::password('password', array('placeholder' => 'Enter Your Password')) }}
    </div>
    <br>
    <div class="login-form-group">
        {!! Form::submit('Submit',
          array('class'=>'btn btn-primary')) !!}
    </div>
    

    <br>
    <a href="register">Create a new account</a>


    {!! Form::close() !!}
@endsection
