@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">
            <h3> Successfully Logged out! <a href= "{{URL::to("login")
                  }}">Log in?</a> </h3>
        </div>
    </div>


@endsection