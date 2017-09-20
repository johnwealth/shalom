@extends('layouts.app')

  @section('header')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=711626562331366";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <header class="masthead" style="background-image: url('/storage/{{$post->image}}')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 
          col-md-offset-1 mx-auto">
            <div class="post-heading">
              <h1>{{ $post->title }}</h1>
              <hr class ="small">
              <h2 class="subheading">{{ $post->sub_title }}</h2>
              <span class="#">Posted by
                <a href="#">{{$post->author->name}}</a>
                 {{Date('F, nS Y g:i A', strtotime($post->created_at))}}</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    @stop

  @section('content')
    
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto" style="margin-bottom:30px ">
            {!! $post->body !!}
          </div>
        </div>
      
      
       <!-- comment facebook Api -->

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto" style="margin-bottom:30px ">
    <div class="fb-comments" data-href="HTTP://localhost/shalom/post" width="100%" data-width="100" data-numposts="5"></div></div>        
        </div>        
      
            <hr>
            <div class="row">
            <div class ="col-md-10 " > 
              <a href="{{url('/')}}" class ="btn btn-default" >ALL Post</a>
            </div>
        </div>

  @stop


 
