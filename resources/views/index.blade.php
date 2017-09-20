@extends('layouts.app')

    @section('header')
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Shalom Rescue Team</h1>
              <hr class ="small">
              <span class="subheading">Soldier of the Cross</span>
            </div>
          </div>
        </div>
      </div>
    </header>
   @stop
    <!-- Main Content -->

  @section('content')
    
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)

          <div class="post-preview">
            <a href="/post/{{$post->slug}}">

              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{$post->excerpt}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{$post->author->name}}</a>
              {{Date('F, nS Y g:i A', strtotime($post->created_at))}}</p>
            </div>

            @endforeach

          <div class="clearfix">  
            <div class="row">
            <div class ="col-md-10 " > 
          {{ $posts->links() }}
          </div>
            </div>
        </div>
        </div>
      </div>

  @endsection