@extends('layout.master')
@section('content')
    <div class="container-brv">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Current Bookings</h2>
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
                    <th>Car</th>
                    <th>Pickup</th>
                    <th>Drop-off</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th width="280px">Action</th>
                </tr>

                {{--@foreach($details as $register)--}}
                @foreach ($return_car_details as $return_car_booking)
                    @if($return_car_booking->user_id == \Illuminate\Support\Facades\Auth::user()->id
                    &&$return_car_booking->isHistory == 0)
                        <tr>
                            <td>{{ $return_car_booking->car }}</td>
                            <td>{{ $return_car_booking->pickup}}</td>
                            <td>{{ $return_car_booking->dropoff}}</td>
                            <td>{{ $return_car_booking->date}}</td>
                            <td>{{ $return_car_booking->startTime}}</td>
                            <td>{{ $return_car_booking->endTime}}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['return.destroy', $return_car_booking->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Return', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endif
                @endforeach
                {{--@endforeach--}}
            </table>
            {!! $return_car_details->render() !!}
        </div>
    </div>
@endsection

