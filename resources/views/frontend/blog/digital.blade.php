@extends('layouts.master')
@section('title')
   Digital Marketing
@endsection
@section('content')
    <div class="container">
        <div class="content">
            <div class="col-md-7 content-left">
                <div class="article">
                    <h5 class="head">in recent posts</h5>
                    <h6>Software </h6>
                    <a class="title" href="{{route('single')}}">DeltaMaker – The new kid on the block An Elegant 3D Printer and a new wicked ass thing</a>
                    <a href="single.html"><img src="{{URL::to('src/images/a1.jpg')}}" alt="" /></a>
                    <p>Products were inspired by Behance's research of especially productive teams in the creative industry. Hundreds of individuals and teams were interviewed, and Behance chronicled the work habits and best practices of creative leaders. </p>
                    <p>The paper products were initially designed by and for the Behance team as a way to stay organized. In 2007, at the insistence of friends who wanted Action Pads of their own...</p>
                </div>
                <div class="article">
                    <h6>Printers</h6>
                    <a class="title" href="{{route('single')}}">Nokia offering customers printable STL phone cases for the Lumia 820 and things </a>
                    <a href="single.html"><img src="{{URL::to('src/images/a2.jpg')}}" alt="" /></a>
                    <p>This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia a files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. </p>
                </div>

                <div class="article">
                    <h6>Printers</h6>
                    <a class="title" href="{{route('single')}}">Nokia offering customers printable STL phone cases for the Lumia 820 and things </a>
                    <a href="single.html"><img src="{{URL::to('src/images/a2.jpg')}}" alt="" /></a>
                    <p>This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia a files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. </p>
                </div>

                <div class="article">
                    <h5 class="head">Mostly Viewed</h5>
                    <h6>Printers</h6>
                    <a class="title" href="{{route('single')}}">Nokia offering customers printable STL phone cases for the Lumia 820 and things </a>
                    <a href="single.html"><img src="{{URL::to('src/images/a2.jpg')}}" alt="" /></a>
                    <p>This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia a files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. </p>
                </div>
            </div>
            <div class="col-md-1" style="width: 4.166666665px; border: 1px solid #e6e6e6">

            </div>
            <div class="col-md-4 content-right">
                <div class="content-right-top">
                    <h5 class="head">Popular</h5>
                    <a href="#">
                        <div class="editor text-center">
                            <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                            <p>A new cheap ass 3D Printer worth checking out</p>
                            <label>2 Days Ago</label>
                            <span></span>
                        </div>
                    </a>
                    <a class="active" href="{{route('single')}}">
                        <div class="editor text-center">
                            <h3>Software Review: Autodesk Inventor Fusion for Mac</h3>
                            <p>3D Printing, 3D Software</p>
                            <label>3 Days Ago</label>
                            <span></span>
                        </div>
                    </a>
                    <a href="{{route('single')}}">
                        <div class="editor text-center">
                            <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                            <p>A new cheap ass 3D Printer worth checking out</p>
                            <label>2 Days Ago</label>
                            <span></span>
                        </div>
                    </a>
                    <a href="{{route('single')}}">
                        <div class="editor text-center">
                            <h3>Software Review: Autodesk Inventor Fusion for Mac</h3>
                            <p>3D Printing, 3D Software</p>
                            <label>3 Days Ago</label>
                            <span></span>
                        </div>
                    </a>
                </div>
                <div class="editors-pic-grids">
                    <h5>Editors Pick</h5>
                    <div class="editors-pic">
                        <div class="e-pic">
                            <a href="{{route('single')}}"><img src="{{URL::to('src/images/ep1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="e-pic-info">
                            <a href="{{route('single')}}single.html">MarkerBot Announces the ‘Replicator 2x’  For the Experimental</a>
                            <span></span>
                            <label>2 Days Ago</label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editors-pic">
                        <div class="e-pic">
                            <a href="{{route('single')}}"><img src="{{URL::to('src/images/ep2.jpg"')}}" alt="" /></a>
                        </div>
                        <div class="e-pic-info">
                            <a href="{{route('single')}}">3D Printed Record – the next revolution?</a>
                            <span></span>
                            <label>2 Days Ago</label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editors-pic">
                        <div class="e-pic">
                            <a href="{{route('single')}}"><img src="{{URL::to('src/images/ep3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="e-pic-info">
                            <a href="{{route('single')}}">MarkerBot Announces the ‘Replicator 2x’  For the Experimental</a>
                            <span></span>
                            <label>2 Days Ago</label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="editors-pic">
                        <div class="e-pic">
                            <a href="{{route('single')}}"><img src="{{URL::to('src/images/ep4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="e-pic-info">
                            <a href="{{route('single')}}">3D Printed Record – the next revolution?</a>
                            <span></span>
                            <label>2 Days Ago</label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>


@endsection