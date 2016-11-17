@extends('layouts.admin-master')
@section('title')
    Create New Admin
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('includes.message-block')
            <h3>Create a new Admin</h3>
            <form action="{{route('create.admin')}}" id="admin_form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Your Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Your Username" value="{{Request::old('email')}}"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Your Password" value="{{Request::old('password')}}"/>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="file">Picture</label>
                    <input class="form-control" type="file" name="file" id="file" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" id="clear" class="btn btn-danger">Clear</button>
                <input type="hidden" name="_token" value="{{Session::token()}}"/>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
             $('#clear').click(function(){
                 $('#admin_form').reset();
             })
        });
    </script>
 @endsection
