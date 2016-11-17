@extends('layouts.admin-master')
@section('title')
   Edit Admin
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('includes.message-block')
            <h3>Edit Admin</h3>
            <form action="{{route('edit_admin',['admin_id'=>$admin->id])}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Your Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Your Username" value="{{$admin->username}}"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Your Password" value="{{$admin->password}}"/>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="superadmin">SuperAdmin</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <input class="form-control" type="file" name="file" id="file" value="" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {{--<input type="hidden" name="admin_id" value="{{$admin->id}}">--}}
                <input type="hidden" name="_token" value="{{Session::token()}}"/>

            </form>
        </div>
    </div>

@endsection