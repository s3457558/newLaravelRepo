@extends('layout.master')
@section('content')
    <div class="container-brv">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Booking return</h2>
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
                    <th>Booking car</th>
                    <th>Booking suburb</th>
                    <th>Booking postcode</th>
                    <th>Booking date</th>
                    <th>Booking time</th>
                    <th width="280px">Action</th>
                </tr>

                {{--@foreach($details as $register)--}}
                @foreach ($return_car_details as $return_car_booking)
                    @if($return_car_booking->user_id == \Illuminate\Support\Facades\Auth::user()->id)
                        <tr>
                            <td>{{ $return_car_booking->id }}</td>
                            <td>{{ $return_car_booking->car_name }}</td>
                            <td>{{ $return_car_booking->suburb}}</td>
                            <td>{{ $return_car_booking->state}}</td>
                            <td>{{ $return_car_booking->date}}</td>
                            <td>{{ $return_car_booking->time}}</td>
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

