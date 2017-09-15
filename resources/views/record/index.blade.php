@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Booking record</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="record_table">
        <table class="table table-bordered">
            <tr>
                <th>Booking ID</th>
                <th>Booking suburb</th>
                <th>Booking postcode</th>
                <th>Booking date</th>
                <th>Booking time</th>
            </tr>

            {{--@foreach($details as $register)--}}
                @foreach ($car_details as $car_booking)
                    <tr>
                        <td>{{ $car_booking->id }}</td>
                        <td>{{ $car_booking->suburb}}</td>
                        <td>{{ $car_booking->state}}</td>
                        <td>{{ $car_booking->date}}</td>
                        <td>{{ $car_booking->time}}</td>
                    </tr>
                @endforeach
            {{--@endforeach--}}
        </table>
        {!! $car_details->render() !!}
    </div>
@endsection

