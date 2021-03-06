<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
  <!-- Meta -->
  @stack('meta')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Title -->
  <title>@yield('title')</title>

  @if(View::hasSection('description'))
  <meta name="description" content="@yield('description')">
  @endif

  {{-- <link rel="icon" href="{{ getAsset('storage/david-grzyb-animoji-favicon.png') }}"> --}}

  <!-- Style sheets -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light-gray flex flex-col h-screen lato">

  @yield('content')

  <!-- Scripts -->
  @stack('scripts')

  @guest
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41723698-6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-41723698-6');

  </script>
  @endguest

  <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
