@extends('admin.master')
@section('title', 'Admin_user')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Table</h2>
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
            <th>User_id</th>
            <th>User_name</th>      {{--register (username)--}}
            <th>User_full_name</th>
            <th>User_email</th>
            <th>User_postcode</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $users_detail)
            {{--@foreach($choose_details as $file)--}}
                <tr>
                    <td>{{ $users_detail->id}}</td>
                    <td>{{ $users_detail->username}}</td>
                    <td>{{ $users_detail->name}}</td>
                    <td>{{ $users_detail->email}}</td>
                    <td>{{ $users_detail->postcode}}</td>
                    <td>
                        {{--show (function) in adminUserController--}}
                        <a class="btn btn-info" href="{{ route('adminUser.show',$users_detail->id) }}">Show</a>



                        {{--<a class="btn btn-primary" href="{{ route('adminUser.showFile',$choose_files->id) }}">License</a>--}}
                        {{--<a class="btn btn-primary" href="{{ route('adminUser.license',$file->id) }}">Edit</a>--}}


                        {!! Form::open(['method' => 'DELETE','route' => ['adminUser.destroy', $users_detail->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                {{--@endforeach--}}
        @endforeach
    </table>
    {!! $users->render() !!}
    {{--{!! $choose_files->render() !!}--}}

@endsection

