@extends('layouts.admin-master')
@section('title')
    News
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    <a class="btn btn-primary link" href="{{route('create_news')}}" role="button"><i class="fa fa-plus"></i>Create News </a>
    <a class="btn btn-success link" href="{{route('admin.dashboard')}}" role="button"><i class="fa fa-edit"></i>View Admin </a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <caption class="text-center"><h3>News Table</h3></caption>
            <thead>
            <tr class="info">
                <th>ID</th>
                <th class="text-center">TITLE</th>
                <th class="text-center">AUTHOR</th>
                <th class="text-center hidden">PICTURE</th>
                <th class="text-center hidden" class="hidden">BODY</th>
                <th class="text-center">CREATED_AT</th>
                <th  class="text-center" colspan="4">OPTIONS</th>


            </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
            <tr data-newsid="{{$new->id}}">
                <td>{{$new->id}}</td>
                <td>{{$new->title}}</td>
                <td>{{$new->author}}</td>
                <td class="hidden">{{$new->picture}}</td>
                <td class="hidden">{{$new->body}}</td>
                <td>{{$new->created_at}}</td>
                <td><a href="#" class="view btn btn-primary"><b>View</b></a></td>
                <td><a href="#" class=" btn btn-primary"><b>Test</b></a></td>
                <td><a href="#" class="edit btn btn-success"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="{{route('delete_news',['delete_id'=> $new->id])}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                @endforeach
            </tr>

            </tbody>
        </table>
    </div>
    <div class="modal fade" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit News</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary " id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="view-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">View News</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="view_title" />
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input class="form-control" type="text" name="author" id="view_author" />
                        </div>
                        <div class="form-group">
                            <label for="file">Picture</label>
                            <input class="form-control" type="file" name="file" id="view_file" />
                            {{--<img id="view_file"/>--}}
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="body" id="view_body" rows="8" {{$errors->has('body') ? 'class=has-error' : ''}}>{{Request::old('body')}}</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    {{--<button type="button" class="btn btn-primary " id="modal-save">Save changes</button>--}}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::to('src/js/news.js')}}"></script>
    <script>
        var token = '{{Session::token()}}';
        var urlEditNews = '{{route('edit_news')}}';
    </script>
@endsection