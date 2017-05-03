<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>
      <link rel="icon" type="image/x-icon" href="{{URL::to('src/images/favicon-32x32.png')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/bootstrap.css')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/style.css')}}">
      <link rel="stylesheet" href="{{URL::to('src/css/font-awesome.css')}}">
      {{--<link rel="stylesheet" type="text/css" href="{{URL::to('src/css/main.css')}}">--}}
      <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/owl.carousel.css')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/owl.theme.css')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/owl.transitions.css')}}">
    @yield('styles')
  </head>
 <body>
@include('includes.header')
@yield('content')
<script type="text/javascript" src="{{URL::to('src/js/jquery-2.1.3.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/jquery-2.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/app.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{URL::to('src/js/owl.carousel.min.js')}}"></script>
<script>
    $( "span.menu" ).click(function() {
        $( ".list-nav" ).slideToggle( "slow", function() {
            // Animation complete.
        });
    });
    $(document).ready(function() {

        $("#owl-example").owlCarousel({
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
//            singleItem:true,
            nav: true,
            navigationText: [
                "<i class='glyphicon glyphicon-chevron-left'></i>",
                "<i class='glyphicon glyphicon-chevron-right'></i>"],
            lazyLoad: true,
            loop: true,
            margin: 10
        });

    });
</script>
@include('includes.footer')
</body>
</html>
