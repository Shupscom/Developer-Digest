@extends('layouts.admin-master')
@section('title')
  Categories
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Add Category</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="category">Category</label>
                    <input class="form-control" type="text" name="category" id="category" placeholder="Category"  value="{{Request::old('category')}}"/>
                </div>
                <button type="submit" class="btn btn-primary" id="add_category">Add Category</button>
                </form>
              </div>
            </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <caption class="text-center"><h3>Manage the Categories</h3></caption>
            <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CREATED_AT</th>
                <th colspan="2">OPTIONS</th>


            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr data-categoryid="{{$category->id}}">
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at}}</td>

                <td><a href="#" class="btn btn-success edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="{{route('delete_category',['category_id'=> $category->id])}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-5">
            <div class="pagination">
                {{ $categories->links() }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Category</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="form-group">
                        <label for="category">Category</label>
                        <input class="form-control" type="text" name="edit_category" id="edit_category"   value="{{Request::old('category')}}"/>
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
        <script type="text/javascript" src="{{URL::to('src/js/categories.js')}}"></script>
        <script>
        var token = '{{Session::token()}}';
        var urlCategory = '{{route('category')}}';
        var urlEditCategory = '{{route('editCategory')}}';
    </script>
@endsection
