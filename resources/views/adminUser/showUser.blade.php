@extends('admin.formmaster')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show users detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('adminUser.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User_id:</strong>
                {{ $users_detail->id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User_name:</strong>
                {{ $users_detail->username}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User_full_name:</strong>
                {{ $users_detail->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User_email:</strong>
                {{ $users_detail->email}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User_postcode:</strong>
                {{ $users_detail->postcode}}
            </div>
        </div>

        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
            {{--<div class="form-group">--}}
                {{--<strong>User_license:</strong>--}}
                {{--{{ $file->id}}--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection