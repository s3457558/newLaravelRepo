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
            {!! Form::text('password', null,
                array('required',
                      'class'=>'register-form-control',
                      'placeholder'=>'Enter your password')) !!}
    </div>
    <br>
    <div class="login-form-group">
        {!! Form::submit('Submit',
          array('class'=>'btn btn-primary')) !!}
    </div>
<<<<<<< HEAD
=======
    

>>>>>>> 7ba5ce48de4ff284b5406bada8d209ec1451c940
    <br>
    <a href="register">Create a new account</a>

    {!! Form::close() !!}
@endsection
