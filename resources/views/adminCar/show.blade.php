@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show cars detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('adminCar.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car id:</strong>
                {{ $cars_add_detail->id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car_name:</strong>
                {{ $cars_add_detail->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car_model:</strong>
                {{ $cars_add_detail->car_model}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car_price:</strong>
                {{ $cars_add_detail->price}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car_status:</strong>
                {{ $cars_add_detail->status}}
            </div>
        </div>
    </div>
@endsection