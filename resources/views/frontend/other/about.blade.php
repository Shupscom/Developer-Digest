@extends('layouts.master')
@section('title')
    About Developer Digest
@endsection
@section('content')
    <div class="container">
        <div class="content">
            <div class="about-content">
                <!-- about -->
                <h3>About Us</h3>
                <img src="{{URL::to('src/images/DD.png')}}" alt=" " />
                <p>Having hands on experience in creating innovative designs, I do offer design
                    solutions which harness the new possibilities of web based communication,
                    internet presence and current technology trends.
                    <label>I do specialize in all aspects of website designing, theme development,
                        designing custom home pages and landing pages At vero eos et accusamus
                        et iusto odio dignissimos ducimus
                        qui blanditiis praesentium Nam libero tempore, cum soluta nobis est eligendi
                        optio cumque nihil impedit quo minus id quod maxime placeat facere
                        possimus, omnis voluptas assumenda est, omnis dolor repellendus. voluptatum...</label></p>
                <div class="clearfix"></div>
                <p class="Nam">Nam libero tempore, cum soluta nobis est eligendi
                    optio cumque nihil impedit quo minus id quod maxime placeat facere
                    possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                <div class="more">
                    <a href="single.html">Learn More</a>
                </div>
            </div>
            <!---728x90--->
            <div style="text-align: center;"><script async src="../../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-9153409599391170"
                     data-ad-slot="6850850687"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script></div>
            <!-- //about -->
            <div class="col-md-7 content-left">
                <div class="article">
                    <h5 class="head">in recent news</h5>
                    <h6>Software </h6>
                    <a class="title" href="single.html">DeltaMaker – The new kid on the block An Elegant 3D Printer and a new wicked ass thing</a>
                    <a href="single.html"><img src="{{URL::to('src/images/a1.jpg')}}" alt="" /></a>
                    <p>Products were inspired by Behance's research of especially productive teams in the creative industry. Hundreds of individuals and teams were interviewed, and Behance chronicled the work habits and best practices of creative leaders. </p>
                    <p>The paper products were initially designed by and for the Behance team as a way to stay organized. In 2007, at the insistence of friends who wanted Action Pads of their own...</p>
                </div>
            </div>
            <div class="col-md-5 content-right content-right-top">
                <h5 class="head">Popular</h5>
                <a href="single.html">
                    <div class="editor text-center">
                        <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                        <p>A new cheap ass 3D Printer worth checking out</p>
                        <label>2 Days Ago</label>
                        <span></span>
                    </div>
                </a>
                <a href="single.html">
                    <div class="editor text-center">
                        <h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
                        <p>A new cheap ass 3D Printer worth checking out</p>
                        <label>2 Days Ago</label>
                        <span></span>
                    </div>
                </a>
                <a href="single.html">
                    <div class="editor text-center">
                        <h3>Software Review: Autodesk Inventor Fusion for Mac</h3>
                        <p>3D Printing, 3D Software</p>
                        <label>3 Days Ago</label>
                        <span></span>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
@endsection