@extends('admin.master')
@section('title', 'Admin_booking')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Booking Table</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Booking_id</th>
            <th>Car</th>
            <th>Pickup</th>
            <th>Drop-off</th>
            <th>Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($car_booking_details as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->car }}</td>
                <td>{{ $booking->pickup}}</td>
                <td>{{ $booking->dropoff}}</td>
                <td>{{ $booking->date}}</td>
                <td>{{ $booking->startTime}}</td>
                <td>{{ $booking->endTime}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('admin.show',$booking->id) }}">Show</a>
                    {{--<a class="btn btn-primary" href="{{ route('admin.edit',$booking->id) }}">Edit</a>--}}
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.destroy', $booking->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $car_booking_details->render() !!}
@endsection

