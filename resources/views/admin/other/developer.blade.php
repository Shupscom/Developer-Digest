@extends('layouts.admin-master')
@section('title')
    Developer of the Week
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-info">
                <div class="panel-heading "><h2 class="text-center">Developer of the Week</h2>
                </div>
                <div class="panel-body">
                    <form action="{{route('developer_save')}}" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="profession">Profession</label>
                            <input type="text" name="profession" class="form-control" id="profession">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="advice">Advice for Other Developer</label>
                            <input type="text" name="advice" class="form-control" id="advice">

                        </div>
                        <div class="form-group">
                            <label for="picture"></label>
                            <input type="file" name="file" class="form-control" id="picture">

                        </div>
                        <div class="form-group">
                            <label for="about">About the Developer</label>
                            <textarea name="about" class="form-control" rows="5" id="about"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Developer of the Week</button>
                        <input type="hidden" value="{{ Session::token()}}" name="_token">
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-5 col-md-push-1">
            <div class="panel panel-info">
                <div class="panel-body ">
                    @foreach($developers as $developer)
                    <div class="well clearfix">
                       {{$developer->name}}
                        <a href="#">{{$developer->created_at}}</a>
                        <div class="pull-right"> <button type="submit" class="btn btn-primary edit"><i class="fa fa-edit fa-2x"></i> </button>
                            <a href="{{route('developer_delete',['developer_id'=>$developer->id])}}" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></a>
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
                    <h4 class="modal-title">Edit Developer</h4>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="profession">Profession</label>
                            <input type="text" name="profession" class="form-control" id="profession">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="advice">Advice for Other Developer</label>
                            <input type="text" name="advice" class="form-control" id="advice">

                        </div>
                        <div class="form-group">
                            <label for="picture"></label>
                            <input type="file" name="file" class="form-control" id="picture">

                        </div>
                        <div class="form-group">
                            <label for="about">About the Developer</label>
                            <textarea name="about" class="form-control" rows="5" id="about"></textarea>
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
    <script type="text/javascript" src="{{URL::to('src/js/miscellanous.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.edit').on('click',function(){
               $('#edit-modal').modal();
            })
        })
    </script>

@endsection