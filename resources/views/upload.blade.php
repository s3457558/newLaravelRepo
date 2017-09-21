@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">               <!-- Need to change the class name as it will override the login page -->
            <div class="title">
                <h2 align="center">Got your drive license? Show me</h2>
                <h5 align="center">The file sample</h5>

                <div class="licensehome" align="center">
                    <img class="licensehome" src="images/license.png" style="width:30%">
                </div>

                @if(count($errors))
                    <ul>
                        @foreach($errors->all() as $error)
                            <li><h4>{{ $error }}</h4></li>
                        @endforeach
                    </ul>
                @endif

                {{--<ul>--}}
                    {{--@foreach($files as $file)--}}
                        {{--<li>{{ $file->filename }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}

                {!! Form::open(array('url'=>'/handleUpload','files'=>true)) !!}
                <div class="choose-file" align="center">
                    {!! Form::file('file') !!}
                    {!! Form::token() !!}
                </div>

                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>

                {{--<button class="btn btn-success" align="center" type="submit">Upload</button>--}}
                    {{--{!! Form::submit('Upload') !!}--}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
























{{--@extends('layout.master')--}}
{{--@section('title', 'Car-Sharing')--}}
{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="content">               <!-- Need to change the class name as it will override the login page -->--}}
            {{--<div class="title">--}}
                {{--<h2 align="center">Got your license? Show me</h2>--}}
            {{--</div>--}}
            {{--<br>--}}

            {{--<form action="{{ route('upload.license') }}" method="post" class = "form-horizontal" enctype="multipart/form-data">--}}
                {{--{{ csrf_field() }}--}}
                {{--<input type="file" name ="license">--}}
                {{--<input type = "submit" class = "btn btn-info">--}}
            {{--</form>--}}
        {{--</div>--}}

        {{--<div class = "row">--}}
        {{--<h2>Show File</h2>--}}
        {{--<img src = "{{ asset('storage/upload/CocaCola.png') }}" alt="">--}}

        {{--</div>--}}


    {{--</div>--}}
{{--@endsection--}}