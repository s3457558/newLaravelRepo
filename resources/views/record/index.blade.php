@extends('layout.master')
@section('content')
    <div class="container-brv">
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
                    <th>Booking car</th>
                    <th>Booking suburb</th>
                    <th>Booking postcode</th>
                    <th>Booking date</th>
                    <th>Booking time</th>
                </tr>

                @foreach ($car_details as $car_booking)
                    @if($car_booking->user_id == \Illuminate\Support\Facades\Auth::user()->id)
                        <tr>
                            <td>{{ $car_booking->id }}</td>
                            <td>{{ $car_booking->Record_car_name}}</td>
                            <td>{{ $car_booking->Record_suburb}}</td>
                            <td>{{ $car_booking->Record_state}}</td>
                            <td>{{ $car_booking->Record_date}}</td>
                            <td>{{ $car_booking->Record_time}}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
            {!! $car_details->render() !!}
        </div>
    </div>
@endsection

