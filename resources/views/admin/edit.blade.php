{{--@extends('admin.formmaster')--}}

{{--@section('content')--}}
    {{--<div class="row">--}}
        {{--<div class="col-lg-12 margin-tb">--}}
            {{--<div class="pull-left">--}}
                {{--<h2>Edit booking detail</h2>--}}
            {{--</div>--}}
            {{--<div class="pull-right">--}}
                {{--<a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@if (count($errors) > 0)--}}
        {{--<div class="alert alert-danger">--}}
            {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
            {{--<ul>--}}
                {{--@foreach ($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--{!! Form::model($booking, ['method' => 'PATCH','route' => ['admin.update', $booking->id]]) !!}--}}
    {{--@include('admin.form')--}}
    {{--{!! Form::close() !!}--}}
{{--@endsection--}}