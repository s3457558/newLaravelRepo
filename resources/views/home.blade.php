@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container-home">
        <div class="content">
            <div class="column col-xs-12 text-center">
                <h1 class="white-text"> Car-Sharing </h1>
                @if(\Illuminate\Support\Facades\Auth::guest())
                <h2 class="white-text2">
                    Easy to find our car in Melbourne
                    <br>
                    Enjoy our share car service
                </h2>

                <a href="register" class="button white-text3">
                        <span>JOIN US NOW</span>

                    </a>
                @endif
                @if(!\Illuminate\Support\Facades\Auth::guest())
                <h2 class="white-text2">
                    Easy to find our car in Melbourne
                    <br>
                    You can book your car now
                </h2>
                <a href="location" class="button white-text3">
                    <span>BOOK CAR</span>
                </a>
                @endif
            </div>
        </div>
    </div>
@endsection
