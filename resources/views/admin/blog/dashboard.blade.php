@extends('layouts.admin-master')
@section('title')
  Dashboard
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    @include('includes.message-block')
    <h1 class="page-header" style="margin-top: 0">Dashboard</h1>
    <div class="row">
        <div class="col-lg-12">
        {{--<div class="col-md-6 col-md-push-4 ">--}}
            {{--<img src="{{URL::to('src/images/DD.png')}}" height="250"/>--}}
        {{--</div>--}}
    <a class="btn btn-primary link" href="{{route('create_post')}}" role="button"><i class="fa fa-plus"></i> New Post </a>
    <a class="btn btn-success link" href="{{route('create_news')}}" role="button"><i class="fa fa-plus"></i>Create News </a>
    {{--@if(Auth::user()->role_id == 1)--}}
    <a class="btn btn-primary link" href="{{route('create_admin')}}" role="button"><i class="fa fa-plus"></i>New Admin </a>
    {{--@endif--}}
            {{--<div id="owl-example" class="owl-carousel">--}}
                {{--<div>  <img src="{{URL::to('src/images/DD.png')}}" height="250"/> </div>--}}
                {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
                {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
                {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
                {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
                {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
                {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/> </div>--}}
                {{--...--}}
            {{--</div>--}}
        </div>

        </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped">
            <caption class="text-center"><h3>AdminUser</h3></caption>
            <thead>
            <tr class="info">
                <th>ID</th>
                <th class="text-center">USERNAME</th>
                <th class="text-center">PASSWORD</th>
                <th class="text-center">PICTURE</th>
                <th class="text-center">ROLE_ID</th>
                <th class="text-center">CREATED_AT</th>
                <th colspan="2" class="text-center">OPTIONS</th>

            </tr>
            </thead>
            <tbody>
            @foreach($admins as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->username}}</td>
                <td>{{$admin->password}}</td>
                <td>{{$admin->picture}}</td>
                <td>{{$admin->role_id}}</td>
                <td>{{$admin->created_at}}</td>
                <td><a href="{{route('edit_admin',['admin_id' => $admin->id])}}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="{{route('delete_admin',['admin_id'=> $admin->id])}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-5">
            <div class="pagination">
                {{ $admins->links() }}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
    $(document).ready(function() {

    $("#owl-example").owlCarousel();

    });
    </script>
    @endsection