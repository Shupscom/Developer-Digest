@extends('layouts.admin-master')
@section('title')
  Posts
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    <a class="btn btn-primary link" href="{{route('create_post')}}" role="button"><i class="fa fa-plus"></i> New Post </a>
    <a class="btn btn-success link" href="{{route('admin.dashboard')}}" role="button"><i class="fa fa-user"></i>View Admin</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <caption class="text-center"><h3>View All Posts</h3></caption>
            <thead>
            <tr class="info">
                <th>ID</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>CATEGORY</th>
                <th class="hidden">PICTURE</th>
                <th class="hidden">BODY</th>
                <th class="hidden">DESCRIPTION</th>
                <th class="hidden">Author Picture</th>
                <th>CREATED_AT</th>
                <th colspan="4" class="text-center">OPTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr data-postid="{{$post->id}}">
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->category_id}}</td>
                <td class="hidden">{{$post->picture}}</td>
                <td class="hidden">{{$post->body}}</td>
                <td class="hidden">{{$post->author_description}}</td>
                <td class="hidden">{{$post->author_picture}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>

                <td><a href="#" class="view btn btn-primary"><b>View</b></a></td>
                <td><a href="{{route('comments',['post_id' => $post->id,'post_title'=> $post->title])}}" class="btn btn-warning"><span class="glyphicon glyphicon-comment"></span></a></td>
                <td><a href="{{route('edit_post',['post_id'=>$post->id])}}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="{{route('delete_post',['post_id'=>$post->id])}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-5">
            <div class="pagination">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <div class="modal fade" id="view-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">View Post</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{Request::old('title')}}"/>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <input class="form-control" type="text" name="title" id="category" placeholder="Title"/>
                        </div>
                        <div class="form-group">
                            <label for="file">Picture</label>
                            <input class="form-control"  type="file" name="file" id="file" />
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="body" id="body" rows="10">{{Request::old('body')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input class="form-control" type="text" name="author" id="author" placeholder="Author"/>
                        </div>
                        <div class="form-group">
                            <label for="author_picture">Author Picture</label>
                            <input class="form-control"  type="file" name="author_picture" id="author_picture" />
                        </div>
                        <div class="form-group">
                            <label for="description">AuthorsDescription</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="window.print()">Print</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    @endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::to('src/js/posts.js')}}"></script>
@endsection