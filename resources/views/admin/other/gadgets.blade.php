@extends('layouts.admin-master')
@section('title')
    Gadgets
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    <a class="btn btn-primary link" href="{{route('create_gadgets')}}" role="button"><i class="fa fa-plus"></i> New Post </a>
    <a class="btn btn-success link" href="{{route('admin.dashboard')}}" role="button"><i class="fa fa-user"></i>View Admin</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <caption class="text-center"><h3>Gadgets</h3></caption>
            <thead>
            <tr>
                <td>ID</td>
                <td>TITLE</td>
                <td>AUTHOR</td>
                <td>BODY</td>
                <td>PICTURE</td>
                <td>CREATED_AT</td>
                <td colspan="2"></td>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>ID</td>
                <td>TITLE</td>
                <td>AUTHOR</td>
                <td>BODY</td>
                <td>PICTURE</td>
                <td>CREATED_AT</td>
                <td><a href="#" class="btn btn-success"> <span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection

