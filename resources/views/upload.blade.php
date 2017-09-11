@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">               <!-- Need to change the class name as it will override the login page -->
            <div class="title">
                <h2>Got your license? Show me</h2>
            </div>
            <br>

            <form action="{{ route('upload.file') }}" method="post" class = "form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name ="file">
                <input type = "submit" class = "btn btn-info">
            </form>
        </div>
    </div>
@endsection