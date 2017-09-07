@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Car Table</h2>
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
            <th>Car_id</th>
            <th>Car_name</th>
            <th>Car_model</th>
            <th>Car_price</th>
            <th>Car_status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cars as $cars_add_detail)
            <tr>
                <td>{{ $cars_add_detail->id}}</td>
                <td>{{ $cars_add_detail->name}}</td>
                <td>{{ $cars_add_detail->car_model}}</td>
                <td>{{ $cars_add_detail->price}}</td>
                <td>{{ $cars_add_detail->status }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('adminCar.show',$cars_add_detail->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('adminCar.edit',$cars_add_detail->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['adminCar.destroy', $cars_add_detail->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $cars->render() !!}
@endsection

