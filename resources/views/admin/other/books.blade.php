@extends('layouts.admin-master')
@section('title')
    Book of the Month
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-4 col-md-offset-4 alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
   <div class="row">
    <div class="col-md-5">
        <div class="panel panel-info">
            <div class="panel-heading "><h2 class="text-center">Book of the Month</h2>
            </div>
            <div class="panel-body">
                    <form action="{{route('book_save')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="coverPage">CoverPage</label>
                        <input type="file" name="file" class="form-control" id="coverPage">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control" id="link">
                    </div>
                    <div class="form-group">
                        <label for="about">Description</label>
                        <textarea name="description" class="form-control" rows="5" id="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Book of the Month</button>
                    <input type="hidden" value="{{ Session::token()}}" name="_token">
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-5 col-md-push-1">
        <div class="panel panel-info">
            <div class="panel-body ">
                @foreach($books as $book)
                    <div class="well clearfix" data-bookid="{{$book->id}}">
                        {{$book->title}}
                        <a href="#">{{$book->created_at}}</a>
                        <div class="pull-right"> <button type="submit"  class="btn btn-primary edit" data-id="{{$book->id}}"><i class="fa fa-edit fa-2x"></i> </button>
                            <a href="{{route('book_delete',['book_id'=>$book->id])}}" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Book</h4>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="editTitle" class="form-control" id="editTitle">
                        </div>
                        <div class="form-group">
                            <label for="coverPage">CoverPage</label>
                            <input type="file" name="file" class="form-control" id="coverPage">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="editLink" class="form-control" id="editLink">
                        </div>
                        <div class="form-group">
                            <label for="about">Description</label>
                            <textarea name="editDescription" class="form-control" rows="5" id="editDescription"></textarea>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){

                 var bookId = 0;
                 var bookTitle = null;
                 var bookLink = null;
                 var bookDes = null;
                 {{--var editroute = '{{route('')}}';--}}
                 $('.panel').find('.panel-body').find('.edit').on('click', function (event) {
                     event.preventDefault()
                     bookId = event.target.parentNode.parentNode.parentNode.dataset['bookid'];
                    bookTitle = event.target.parentNode.parentNode.childNodes[0];

                     alert(bookTitle);
//                     var leaderBody = leader.textContent;
//                     $('#editLeader').val(leaderBody);
                     $('#edit-modal').modal();
                 });
//                 $('#edit-modal').modal();
        });
    </script>
    @endsection