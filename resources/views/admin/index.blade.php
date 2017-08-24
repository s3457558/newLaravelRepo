@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin table</h2>
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
            <th>User name</th>      {{--register (username)--}}
            <th>Booking ID</th>     {{--booking ID -> $car_booking_details->id--}}
            <th>Booking address</th>
            <th>Booking suburb</th>
            <th>Booking postcode</th>
            {{--<th>Booking address</th>--}}
            <th width="280px">Action (admin can view the detail about booking details and delete one of them from database)</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->details}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('admin.show',$product->id) }}">Show</a>
                    {{--<a class="btn btn-primary" href="{{ route('productCRUD.edit',$product->id) }}">Edit</a>--}}
                    {!! Form::open(['method' => 'DELETE','route' => ['productCRUD.destroy', $product->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $products->render() !!}
@endsection

