@extends('layouts.admin-master')
@section('title')
    Scholars Platform
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table table-hover">
            <caption class="text-center"><h3>Scholars Forum</h3></caption>
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

