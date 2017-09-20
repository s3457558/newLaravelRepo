@extends('layout.master')

@section('title','location')

@section('content')
    <div class="container">

        <input id="pac-input" class="controls" type="text" placeholder="Search Box">

        <div id="map"></div>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Select Your Car</h2>
                </div>
                <div class="modal-body">

                    @foreach($cars as $data)
                        <p>{{$data->name}}</p>
                    @endforeach

                        @if(!\Illuminate\Support\Facades\Auth::guest())
                            <a href="booking.create" class="button white-text3">
                                <span>Book</span></a>
                        @endif

                        @if(!\Illuminate\Support\Facades\Auth::check())
                            <a href="login" class="button white-text3">
                                <span>Book</span></a>
                        @endif



                </div>

                <div class="modal-footer">
                    <h3></h3>
                </div>
            </div>


        </div>
    </div>

@endsection