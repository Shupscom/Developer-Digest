@extends('layouts.admin-master')
@section('title')
  Create a new Post
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    {{--@include('includes.message-block')--}}
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Create a New Post</h3>
            <form action="{{route('create_post')}}" method="post" enctype="multipart/form-data">
                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{Request::old('title')}}"/>
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="">Select a Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('category'))
                        <span class="help-block">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                    <label for="file">Picture</label>
                    <input class="form-control"  type="file" name="file" id="file" />
                    @if ($errors->has('file'))
                        <span class="help-block">
                            <strong>{{ $errors->first('file') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="body" rows="10" {{$errors->has('body') ? 'class=has-error' : ''}}>{{Request::old('body')}}</textarea>
                    @if ($errors->has('body'))
                        <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                    <label for="author">Author</label>
                    <input class="form-control" type="text" name="author" id="author" placeholder="Author" value="{{Request::old('author')}}"/>
                    @if ($errors->has('author'))
                        <span class="help-block">
                            <strong>{{ $errors->first('author') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="author_picture">Author Picture</label>
                    <input class="form-control"  type="file" name="author_picture" id="author_picture" />
                </div>
                <div class="form-group">
                    <label for="description">AuthorsDescription</label>
                    <textarea class="form-control" name="description" id="description" rows="3" {{$errors->has('body') ? 'class=has-error' : ''}}>{{Request::old('body')}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger">Clear</button>
                <input type="hidden" name="_token" value="{{Session::token()}}"/>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        window.onload = function(){
            CKEDITOR.replace('body');
            CKEDITOR.replace('description');
        }
    </script>
@endsection