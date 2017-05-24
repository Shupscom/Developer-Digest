@extends('layouts.admin-master')
@section('title')
    Contact
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')

    <div class="table-responsive">
        <table class="table table-hover">
            <caption class="text-center"><h3>All Discussions</h3></caption>
            <thead>
            <tr>
                <th>id</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>MESSAGE</th>
                <th colspan="2">OPTION</th>

            </tr>
            </thead>
            <tbody>
            @foreach($alldiscuss as $discuss)
                <tr>
                    <td>{{$discuss->id}}</td>
                    <td>{{$discuss->name}}</td>
                    <td>{{$discuss->email}}</td>
                    <td>{{$discuss->message}}</td>
                    <td colspan="2"><a href="#" class="btn btn-primary"><b>View</b></a>
                        <a href="#" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection