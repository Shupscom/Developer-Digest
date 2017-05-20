@extends('layouts.master')
@section('title')
  Welcome to Developer Digest
@endsection
@section('content')
    {{--<div style="text-align: center;"><script async src="../../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>--}}
        {{--<ins class="adsbygoogle"--}}
             {{--style="display:inline-block;width:728px;height:90px"--}}
             {{--data-ad-client="ca-pub-9153409599391170"--}}
             {{--data-ad-slot="6850850687"></ins>--}}
        {{--<script>--}}
            {{--(adsbygoogle = window.adsbygoogle || []).push({});--}}
        {{--</script></div>--}}
    {{--</div>--}}
    {{--This is the caurosel place--}}
    <div class="col-lg-12">
    <div id="owl-example" class="owl-carousel">
    {{--<div>  <img src="{{URL::to('src/images/DD.png')}}" height="250"/> </div>--}}
    {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
    {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
    {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
    {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
    {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/>  </div>--}}
    {{--<div> <img src="{{URL::to('src/images/DD.png')}}" height="250"/> </div>--}}
    </div>
        </div>
    <div class="social-media pull-right clearfix">
        <a class="btn btn-primary social-facebook" href="#"><i class="fa fa-facebook fa-2x"></i></a>
        <a class="btn btn-primary social-twitter" href="#"><i class="fa fa-twitter fa-2x"></i></a>
        <a class="btn btn-primary social-google" href="#"><i class="fa fa-instagram fa-2x"></i></a>
        <a class="btn btn-primary  social-linkedin" href="#"><i class="fa fa-linkedin fa-2x"></i></a>
        <a class="btn btn-primary  social-google" href="#"><i class="fa fa-google-plus fa-2x"></i></a>

    </div>
        </div>
    <div class="container">
        <div class="content">
            <div class="col-md-7 content-left">
                <div class="article">
                    <h5 class="head">Discussions</h5>
                    <h6>Name|email </h6>
                    <a class="title" href="{{route('single')}}">DeltaMaker – The new kid on the block An Elegant 3D Printer and a new wicked ass thing</a>
                </div>
                <div class="article">
                    <h5 class="head">in recent posts</h5>
                    <h6>Software </h6>
                    <a class="title" href="{{route('single')}}">DeltaMaker – The new kid on the block An Elegant 3D Printer and a new wicked ass thing</a>
                    <a href="{{route('single')}}"><img src="{{URL::to('src/images/a1.jpg')}}" alt="" /></a>
                    <p>Products were inspired by Behance's research of especially productive teams in the creative industry. Hundreds of individuals and teams were interviewed, and Behance chronicled the work habits and best practices of creative leaders. </p>
                    <p>The paper products were initially designed by and for the Behance team as a way to stay organized. In 2007, at the insistence of friends who wanted Action Pads of their own...</p>
                </div>
                <div class="article">
                    <h6>Printers</h6>
                    <a class="title" href="{{route('single')}}">Nokia offering customers printable STL phone cases for the Lumia 820 and things </a>
                    <a href="{{route('single')}}"><img src="{{URL::to('src/images/a2.jpg')}}" alt="" /></a>
                    <p>This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia a files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. </p>
                </div>

                <div class="article">
                    <h6>Printers</h6>
                    <a class="title" href="{{route('single')}}">Nokia offering customers printable STL phone cases for the Lumia 820 and things </a>
                    <a href="#"><img src="{{URL::to('src/images/a2.jpg')}}" alt="" /></a>
                    <p>This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia a files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range.
                        <a href="#" class="learn">Learn More</a>
                    </p>
                </div>
                <div class="article">
                    <h5 class="head">Mostly Viewed</h5>
                    <h6>Printers</h6>
                    <a class="title" href="{{route('single')}}">Nokia offering customers printable STL phone cases for the Lumia 820 and things </a>
                    <a href="single.html"><img src="{{URL::to('src/images/a2.jpg')}}" alt="" /></a>
                    <p>This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia a files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. </p>
                </div>
            </div>
            {{--<div class="col-md-1" style="width: 4.166666665px; border: 1px solid #e6e6e6">--}}

            {{--</div>--}}
            <div class="col-md-5 content-right">
                <div class="content-right-top">
                    <h5  class="head">Daily Quote</h5>
                        <div class="editor text-center">
                            <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                            <p>A new cheap ass 3D Printer worth checking out</p>
                            {{--<label>2 Days Ago</label>--}}
                            {{--<span></span>--}}
                        </div>
                    {{--<h5  class="head">Join the Discussion</h5>--}}
                    {{--<div class="editor text-center">--}}
                        {{--<h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>--}}
                        {{--<p>A new cheap ass 3D Printer worth checking out</p>--}}
                        {{--<label>2 Days Ago</label>--}}
                        {{--<span></span>--}}
                    {{--</div>--}}
                </div>
                <div class="editors-pic-grids">
                    <h5>Developer of the Week</h5>
                    <div class="editors-pic">
                        <div class="e-pic">
                            <a href="{{route('single')}}"><img src="{{URL::to('src/images/ep1.jpg')}}" class="img-circle"/></a>
                        </div>
                        <div class="e-pic-info text-center">
                            <h3><span style="color:#1ac7c3">Name:</span> Olasupo Kazeem Abolaji</h3>
                            <h3><span style="color:#1ac7c3">Profession:</span> Software Developer</h3>
                            <h3><span style="color:#1ac7c3">Advice to Developer:</span>Build a strong foundation </h3>
                            <h3><span style="color:#1ac7c3">About Developer:</span>Build a strong foundation </h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="content-right-top">
                    <h5 class="head" style="width: 30%">LASTEST NEWS </h5>
                    <a href="#">
                        <div class="editor text-center">
                            <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                            <p>A new cheap ass 3D Printer worth checking out</p>
                            <label>2 Days Ago</label>
                        </div>
                    </a>
                    <a href="#">
                        <div class="editor text-center">
                            <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                            <p>A new cheap ass 3D Printer worth checking out</p>
                            <label>2 Days Ago</label>
                        </div>
                    </a>
                    <a href="#">
                        <div class="editor text-center">
                            <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                            <p>A new cheap ass 3D Printer worth checking out</p>
                            <label>2 Days Ago</label>
                        </div>
                    </a>
                    <a href="#">
                        <div class="editor text-center">
                            <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                            <p>A new cheap ass 3D Printer worth checking out</p>
                            <label>2 Days Ago</label>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!---728x90--->
            {{--<div class="col-md-7 content-left">--}}
                {{--<div class="article">--}}
                    {{--<h5 class="head">in recent news</h5>--}}
                    {{--<h6>Software </h6>--}}
                    {{--<a class="title" href="{{route('single')}}">DeltaMaker – The new kid on the block An Elegant 3D Printer and a new wicked ass thing</a>--}}
                    {{--<a href="{{route('single')}}"><img src="{{URL::to('src/images/a1.jpg')}}" alt="" /></a>--}}
                    {{--<p>Products were inspired by Behance's research of especially productive teams in the creative industry. Hundreds of individuals and teams were interviewed, and Behance chronicled the work habits and best practices of creative leaders. </p>--}}
                    {{--<p>The paper products were initially designed by and for the Behance team as a way to stay organized. In 2007, at the insistence of friends who wanted Action Pads of their own...</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-5 content-right content-right-top">--}}
                {{--<h5 class="head">Popular</h5>--}}
                {{--<a href="{{route('single')}}">--}}
                    {{--<div class="editor text-center">--}}
                        {{--<h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>--}}
                        {{--<p>A new cheap ass 3D Printer worth checking out</p>--}}
                        {{--<label>2 Days Ago</label>--}}
                        {{--<span></span>--}}
                    {{--</div>--}}
                {{--</a>--}}
                {{--<a href="{{route('single')}}">--}}
                    {{--<div class="editor text-center">--}}
                        {{--<h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>--}}
                        {{--<p>A new cheap ass 3D Printer worth checking out</p>--}}
                        {{--<label>2 Days Ago</label>--}}
                        {{--<span></span>--}}
                    {{--</div>--}}
                {{--</a>--}}
                {{--<a href="{{route('single')}}">--}}
                    {{--<div class="editor text-center">--}}
                        {{--<h3>Software Review: Autodesk Inventor Fusion for Mac</h3>--}}
                        {{--<p>3D Printing, 3D Software</p>--}}
                        {{--<label>3 Days Ago</label>--}}
                        {{--<span></span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        </div>
    </div>
    @endsection