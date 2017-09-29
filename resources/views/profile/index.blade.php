@extends('layout.master')
@section('content')
    <div class="container-brv">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Customer detail</h2>
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


            @foreach ($users_profile as $users_detail_profile)
                @if($users_detail_profile->id == \Illuminate\Support\Facades\Auth::user()->id)
                    <tr>
                        <td>{{ $users_detail_profile->id}}</td>
                        <td>{{ $users_detail_profile->username}}</td>
                        <td>{{ $users_detail_profile->name}}</td>
                        <td>{{ $users_detail_profile->email}}</td>
                        <td>{{ $users_detail_profile->postcode}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('profile.edit',$users_detail_profile->id) }}">Edit</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
        {!! $users_profile->render() !!}
    </div>
@endsection

