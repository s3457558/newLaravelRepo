@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Booking Table</h2>
            </div>
            {{--<div class="pull-right">--}}
                {{--<a class="btn btn-success" href="{{ route('admin.create') }}"> Create New Product</a>--}}
            {{--</div>--}}
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Booking ID</th>      {{--register (username)--}}
            {{--<th>Booking address</th>--}}
            <th>Booking suburb</th>
            <th>Booking postcode</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($car_booking_details as $booking)
            <tr>
                {{--<td>{{ ++$i }}</td>--}}
                <td>{{ ++$i }}</td>
                <td>{{ $booking->suburb}}</td>
                <td>{{ $booking->state}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('admin.show',$booking->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.edit',$booking->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.destroy', $booking->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $car_booking_details->render() !!}
@endsection

