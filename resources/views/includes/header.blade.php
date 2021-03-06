<div class="header">
    <div class="container">
        <div class="logo">

            <a href="{{route('index')}}"><h1> Developer Digest</h1></a>
        </div>
        <div class="pages">
            <ul>
                <li><a href="{{route('scholarsplatform')}}" {{Request::is('Scholars') ? 'class=active':''}}>Scholars</a></li>
                <li><a href="{{route('gadgets')}}" {{Request::is('Gadgets') ? 'class=active':''}}>Gadgets</a></li>
                <li><a href="{{route('tutorials')}}" {{Request::is('Tutorials') ? 'class=active':''}}>Tutorials</a></li>
                <li><a href="{{route('news')}}"{{Request::is('News') ? 'class=active':''}}>News</a></li>
            </ul>
        </div>
        <div class="navigation">
            <ul>
                <li><a href="{{route('discussion')}}" class="btn btn-primary" style="background: #282828; border-color:#1ac7c3">Create Discussion</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('contact_me')}}" {{Request::is('Contact') ? 'class=active':''}}>Contact Us</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="header-bottom">
        <div class="type">
            {{--<h5>Article Types</h5>--}}
            <h5>Categories</h5>
        </div>
        <span class="menu"></span>
        <div class="list-nav">
            <ul>
                {{--@foreach($categories as $category)--}}
                    {{--<li><a href="">{{$category->name}}</a></li>--}}
                    {{--@endforeach--}}
                <li><a href="">Web Development</a></li>|
                <li><a href="">Software Development</a></li>|
                <li><a href="">UI/UX Design</a></li>|
                <li><a href="">Electronics</a></li>|
                <li><a href="">Digital Marketing</a></li>|
                {{--<li><a href="">One More</a></li>--}}
            </ul>
        </div>


        <div class="clearfix"></div>
    </div>

