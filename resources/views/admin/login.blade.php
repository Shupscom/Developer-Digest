@extends('layouts.admin-master')
@section('title')
   AdminLogin
@endsection
@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Adminstrator Login</h4></div>
                <div class="panel-body">
            <form action="{{route('admin.login')}}" method="post" enctype="multipart/form-data">

                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }} ">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">Select Your Role</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('role'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username">Your Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Your Username" value="{{Request::old('email')}}"/>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Your Password" value="{{Request::old('password')}}"/>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <button type="submit" class="btn btn-danger">Clear</button>
                <input type="hidden" name="_token" value="{{Session::token()}}"/>
            </form>
                </div>
                </div>
        </div>
    </div>

@endsection