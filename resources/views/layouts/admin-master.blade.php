<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{URL::to('src/images/favicon-32x32.png')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/admin-main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/owl.transitions.css')}}">
    @yield('styles')

<body>
@include('includes.admin-header')
<div class="container" style="min-height: 500px">
    @yield('content')
</div>
<script type="text/javascript" src="{{URL::to('src/js/jquery-2.1.3.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/jquery-2.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/bootbox.js')}}"></script>
@include('includes.admin-footer')
@yield('scripts')
</body>
</html>
