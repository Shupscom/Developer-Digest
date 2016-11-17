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
                    <form action="#" method="">
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
                            <input type="email" name="profession" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="advice">Advice for Other Developer</label>
                            <input type="text" name="advice" class="form-control" id="advice">

                        </div>
                        <div class="form-group">
                            <label for="picture"></label>
                            <input type="file" name="picture" class="form-control" id="picture">

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