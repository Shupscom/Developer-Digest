@extends('layouts.master')
@section('title')
 Subscription
@endsection
@section('styles')
    <style>
    </style>
    @endsection
@section('content')
  </div>
  <div class="container">
      <div class="content">
          <!--404-->
          <div class="error">
              <div class="error-head">
                  <img src="{{URL::to('src/images/DD.png')}}" height="250px"/>
                  <h4>Buiding Nigerian Developer Stories</h4>
                  <h2>Stay Updated by subscribing to our mailing list</h2>
                  <div class="col-md-6 col-md-offset-3">
                      <form>
                          <label>&nbsp</label>
                          <input type="text" class="form-control" name="">
                          <a class="hvr-bounce-to-left button" href="index-2.html"><i class="glyphicon glyphicon-envelope"></i>&nbspSubscribe</a>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  {{--Try to study this probably--}}
  {{-- Form Starts Here --}}
  {{--{{Form::open(array('url'=> URL::to('subscribers/submit'),'method' => 'post'))}}--}}
  {{--<p>Simple Newsletter Subscription</p>--}}
  {{--{{Form::text('email',null,array('placeholder'=>'Type your E-mail address here'))}}--}}
  {{--{{Form::submit('Submit!')}}--}}

  {{--{{Form::close()}}--}}
  {{-- Form Ends Here --}}

  {{-- This div will show the ajax response --}}
  {{--<div class="content"></div>--}}
  {{-- Because it'll be sent over AJAX, We add thejQuery source --}}
  {{--{{ HTML::script('http://code.jquery.com/jquery-1.8.3.min.js') }}--}}
  {{--<script type="text/javascript">--}}
      {{--//Even though it's on footer, I just like to make//sure that DOM is ready--}}
      {{--$(function(){--}}
{{--//We hide de the result div on start--}}
          {{--$('div.content').hide();--}}
{{--//This part is more jQuery Related. In short, we //make an Ajax post request and get the response//back from server--}}
          {{--$('input[type="submit"]').click(function(e){--}}
              {{--e.preventDefault();--}}
              {{--$.post('/subscribers/submit', {--}}
                  {{--email: $('input[name="email"]').val()--}}
              {{--}, function($data){--}}
                  {{--if($data=='1') {--}}
                      {{--$('div.content').hide().removeClass('success error').addClass('success').html('You\'ve successfully subscribed to ournewsletter').fadeIn('fast');--}}
                  {{--} else {--}}
{{--//This part echos our form validation errors--}}
                      {{--$('div.content').hide().removeClass('success error').addClass('error').html('There has been an error occurred:<br /><br />'+$data).fadeIn('fast');--}}
                  {{--}--}}
              {{--});--}}
          {{--});--}}
{{--//We prevented to submit by pressing enter or anyother way--}}
          {{--$('form').submit(function(e){--}}
              {{--e.preventDefault();--}}
              {{--$('input[type="submit"]').click();--}}
          {{--});--}}
      {{--})--}}
@endsection