@extends('admin.master')
@section('title', 'Admin_license')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>License table</h2>
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
            <th>License</th>
            <th>License_name</th>      {{--register (username)--}}
            <th>License_size(bytes)</th>
        </tr>
        @foreach ($choose_files as $license)
            <tr>
                <td>{{ $license->id}}</td>
                <td>{{ $license->filename}}</td>
                <td>{{ $license->filesize_bytes}}</td>
            </tr>
        @endforeach
    </table>
    {!! $choose_files->render() !!}
@endsection


{{--@foreach($files as $userfile)--}}
    {{--<img src="storage/app/uploads" alt=""  width="150" height="150">--}}
    {{--<img src="storage/{{$userfile->filename}}" alt=""  width="150" height="150">--}}
{{--@endforeach--}}
