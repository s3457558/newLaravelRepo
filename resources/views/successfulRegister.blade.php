@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">
            @if(!\Illuminate\Support\Facades\Auth::guest())
              <h3> New account successfully created! <a href= "{{URL::to("login")
                  }}">Log in?</a> </h3>

            @endif
        </div>
    </div>


@endsection