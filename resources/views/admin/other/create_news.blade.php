@extends('layouts.admin-master')
@section('title')
   Create News
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Create a News</h3>
            <form action="{{route('create_news')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{Request::old('title')}}"/>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input class="form-control" type="text" name="author" id="author" placeholder="Author" value="{{Request::old('author')}}"/>
                </div>
                <div class="form-group">
                    <label for="file">Picture</label>
                    <input class="form-control" type="file" name="file" id="file" />
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="body" rows="8" {{$errors->has('body') ? 'class=has-error' : ''}}>{{Request::old('body')}}</textarea>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{Session::token()}}"/>
            </form>
        </div>
    </div>
    <script>
        window.onload(function(){
            CKEDITOR.replace('body');
        });
    </script>


@endsection