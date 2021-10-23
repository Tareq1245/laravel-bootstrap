<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      @include('include.navbar')
      <div class="container">
        @if(Request::is('/'))
        @include('include.showcase')
        @endif

      <div class="row">
        <div class="col-md-8 col-lg-8">
          @include('include.message')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('include.sidebar')
        </div>
      </div>
      </div>

    </div>
    @include('include.footer')
</body>
</html>
