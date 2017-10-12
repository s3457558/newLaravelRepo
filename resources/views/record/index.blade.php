@extends('layout.master')
@section('content')
    <div class="container-brv">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Booking History</h2>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div style="overflow-x:auto;">
        <div class="record_table">
            <table class="table table-bordered">
                <tr>
                    <th>Car</th>
                    <th>Pickup</th>
                    <th>Drop-off</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>
                {{--@foreach($details as $register)--}}
                @foreach ($bookings as $booking)
                    @if($booking->user_id == \Illuminate\Support\Facades\Auth::user()->id
                    && $booking->isHistory == 1)
                        <tr>
                            <td>{{ $booking->car }}</td>
                            <td>{{ $booking->pickup}}</td>
                            <td>{{ $booking->dropoff}}</td>
                            <td>{{ $booking->date}}</td>
                            <td>{{ $booking->startTime}}</td>
                            <td>{{ $booking->endTime}}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
            </div>
        </div>
    </div>
@endsection

