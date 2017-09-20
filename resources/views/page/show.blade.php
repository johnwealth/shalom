@extends('layouts.app')

@section('header')
     <header class="masthead" style="background-image: url('/storage/{{$page->image}}')">
      <div class="container">
         <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 
          col-md-offset-1 mx-auto">
            <div class="post-heading">
              <h1>{{ $page->title }}</h1>
              <hr class="samll">
              <h2 class="subheading">{{ $page->sub_heading }}</h2>
            </div>
          </div>
        </div>
      </div>
    </header>
@stop

@section('content')

 <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
             {!! $page->body !!}
          </div>
        </div>
      </div>
    </article>

    <hr>
@stop