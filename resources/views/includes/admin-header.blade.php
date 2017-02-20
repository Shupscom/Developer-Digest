{{--<div class="jumbotron text-center" style="margin-top: 0">--}}
    {{--<h2>Developer Digest</h2>--}}
    {{--<p>A Nigerian blog for Developers</p>--}}
{{--</div>--}}
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <a class="navbar-brand" href="{{route('admin.dashboard')}}">DevDigest Admin</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('admin.posts')}}">Posts</a></li>
                    <li><a href="{{route('categories')}}">Categories</a></li>
                    <li><a href="{{route('scholars')}}">Scholars</a></li>
                    <li><a href="{{route('contact')}}">ContactMessages</a></li>
                    <li><a href="{{route('news')}}">News</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Miscellanous<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('quote')}}">Quote of the Day</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('developer')}}">Developer of the Week</a></li>
                        </ul>
                    </li>
                    @if(Auth::user())
                    <li><a href="{{route('admin.logout')}}">Logout</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

