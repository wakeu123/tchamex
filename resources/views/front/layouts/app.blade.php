<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="3HjynndSPY4ZnXQdIrivKCULwsIbEwzJQMJwc=">
        <meta name="robots" content="follow,index">

        <title>{{ config('app.name') }}</title>

        <meta name="author" content="Wakeu Georges Favier">
        <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
       

        <!-- Styles -->
       @yield('css')
       <meta property="og:url" content="{{ request()->url() }}"/>
       @yield('og')
    </head>
    <body>
       
        @include('front.partials._footers')
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/front.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        @yield('js')
        @include('flashy::message')
    </body>
</html>
