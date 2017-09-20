<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Voyager::setting('title')}}</title>
  <!--   <title>Clean Blog - Start Bootstrap Theme</title> -->
    <!-- Styles -->
    <link href="/{{ asset('css/app.css') }}" rel="stylesheet">
      @include('partials._stylesheet')
    </head>

<body> 
   @include('partials._nav')
      

       <div id="container">
       @yield('header')
       
        @yield('content')

       @include('partials._footer')

       </div> 
    <!-- Scripts -->
    <script src="/{{ asset('js/app.js') }}"></script>
    @include('partials._script')
</body>
</html>
