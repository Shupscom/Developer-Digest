@extends('layouts.admin-master')
@section('title')
    Comments
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($comments as $comment)
                <div class="panel panel-default">
                    <div class="panel-heading text-uppercase">{{$post->title}}</div>
                    <div class="panel-body">
                        <div>{{$comment->comment_body}}</div>
                        <a href="">{{$comment->fullname}}</a>|
                        <a href="">{{$comment->created_at}}</a>
                        <a class="clearfix"></a>
                        <a href="#" class="btn btn-danger pull-right delete">Delete</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::to('src/js/comments.js')}}"></script>

@endsection