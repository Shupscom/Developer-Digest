@extends('layouts.admin-master')
@section('title')
 Daily Quotes
@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
@endsection
@section('content')
   <div class="row">
       <div class="col-md-5 col-md-offset-1">
           <div class="panel panel-info">
               <div class="panel-heading "><h2 class="text-center">Quote of the Day</h2>
               </div>
               <div class="panel-body">
                   <form action="{{route('quote_save')}}" method="post">
                       <div class="form-group">
                           <label for="quote">Write a Quote</label>
                           <textarea name="quote" class="form-control" id="quote"></textarea>
                       </div>
                       <div class="form-group">
                           <label for="author">Author</label>
                           <input type="text" name="author" class="form-control" id="author">
                       </div>

                       <button type="submit" class="btn btn-success btn-lg btn-block">Create a Quote</button>
                       <input type="hidden" value="{{ Session::token()}}" name="_token">
                   </form>

               </div>
           </div>
       </div>
       <div class="col-md-5">
           <div class="panel panel-info">
               <div class="panel-body ">
                   @foreach($quotes as $quote)
                   <div class="well clearfix">
                       {{$quote->quote}}
                           <a href="#">{{date('F j, Y H:i',strtotime($quote->created_at))}}</a>
                           {{--This is basically for the number of likes--}}
                       <div class="pull-right"> <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up fa-2x"></i> </button>
                           <a href="" class="btn btn-success" id="edit"><i class="fa fa-edit fa-2x"></i></a>
                           <a href="{{route('quote_delete',['quote_id'=> $quote->id])}}" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></a>
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
                   <h4 class="modal-title">Edit Quote</h4>
               </div>
               <div class="modal-body">
                   <form method="post" action="">
                       <div class="form-group">
                           <label for="edit_quote">Write a Quote</label>
                           <textarea class="form-control"  name="edit_quote" id="edit_quote"></textarea>
                       </div>
                       <div class="form-group">
                           <label for="edit_quote">Author</label>
                           <input type="text" class="form-control"  name="edit_author" id="edit_author"></textarea>
                       </div>
                   </form>
                  </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
               </div>
           </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
   </div><!
@endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::to('src/js/miscellanous.js')}}"></script>
@endsection