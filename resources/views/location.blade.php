@extends('layout.master')

@section('title','location')

@section('content')
    <div class="container" id="idWorksL">

        
        
            <div id="map"></div>
            <div id="boxToSearch">
           <p> <input id="pac-input" class="controls" type="text" placeholder="Type Location to find cars"></p>
            <div id="findText">get my location: </div>    
            <button type="button" id="myCurrentLoc">GO</button>
            </div>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Select Your Car</h2>
                </div>
                <div class="modal-body">

                    @foreach($carLocation as $location)
                        @foreach($location->cars as $object)
                        {{$object->name}}
                        @endforeach
                     @endforeach
                    
                    <p>Car One Place Holder
                        @if(!\Illuminate\Support\Facades\Auth::guest())
                            <a href="booking.create" class="button white-text3">
                                <span>Book</span></a>
                        @endif

                        @if(!\Illuminate\Support\Facades\Auth::check())
                            <a href="login" class="button white-text3">
                                <span>Book</span></a>
                        @endif

                    </p>

                    <p>Car Two Place Holder
                        @if(!\Illuminate\Support\Facades\Auth::guest())
                            <a href="booking.create" class="button white-text3">
                                <span>Book</span></a>

                        @endif
                        @if(!\Illuminate\Support\Facades\Auth::check())
                            <a href="login" class="button white-text3">
                                <span>Book</span></a>
                        @endif
                    </p>
                </div>

                <div class="modal-footer">
                    <h3></h3>
                </div>
            </div>


        </div>
    </div>

@endsection