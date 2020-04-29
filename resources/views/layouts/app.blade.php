<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('googletagmanager::head')
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
      {{-- Meta Data --}}
      {!! SEO::generate(true) !!}
    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('site.webmanifest') }}">

     {{-- Styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

      @include('partials.header')
          @yield('content')
      @include('partials.footer')

    @include('googletagmanager::body')
    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>