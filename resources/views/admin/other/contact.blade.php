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
            <caption class="text-center"><h3>Contacts Info</h3></caption>
            <thead>
            <tr>
                <th>id</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>SUBJECT</th>
                <th>MESSAGE</th>
                <th>CREATED_AT</th>
                <th colspan="2">OPTION</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Subject</td>
                <td>Message</td>
                <td>created_at</td>
                <td colspan="2"><a href="#" class="btn btn-primary"><b>View</b></a>
                <a href="#" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>

            </tbody>
        </table>
    </div>


@endsection