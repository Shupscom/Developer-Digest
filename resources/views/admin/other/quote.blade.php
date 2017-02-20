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
                   <div class="well clearfix">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores dolore dolorem, dolorum, eius eveniet fuga harum laborum minima minus necessitatibus neque nesciunt nobis perspiciatis quia ratione similique sint vel.
                   <a href="#">Created at</a>
                       <div class="pull-right"> <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up fa-2x"></i> </button>
                           <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></button>
                       </div>
                   </div>

                   <div class="well clearfix">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores dolore dolorem, dolorum, eius eveniet fuga harum laborum minima minus necessitatibus neque nesciunt nobis perspiciatis quia ratione similique sint vel.
                       <a href="#">Created at</a>
                       <div class="pull-right"> <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up fa-2x"></i> </button>
                           <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></button>
                       </div>
                   </div>

                   <div class="well clearfix">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores dolore dolorem, dolorum, eius eveniet fuga harum laborum minima minus necessitatibus neque nesciunt nobis perspiciatis quia ratione similique sint vel.
                       <a href="#">Created at</a>
                       <div class="pull-right"> <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-o-up fa-2x"></i> </button>
                           <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></button>
                       </div>
                   </div>


               </div>
           </div>
       </div>

   </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::to('src/js/miscellanous.js')}}"></script>
@endsection