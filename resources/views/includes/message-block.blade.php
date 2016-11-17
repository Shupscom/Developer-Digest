@if(Session::has('fail'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 alert alert-danger ">
           <p class="text-center text-uppercase"><strong>{{Session::get('fail')}}</strong></p>
        </div>
    </div>
@endif

@if(Session::has('success'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 alert alert-success">
            <p class="text-center text-uppercase"><strong>{{Session::get('success')}}</strong></p>
        </div>
    </div>
@endif

@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4 alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif