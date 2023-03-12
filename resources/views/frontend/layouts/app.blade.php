<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('frontend.site_name')</title>

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/Normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nanoscroller.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    @if  (app() ->getLocale()=='ar')

        <link rel="stylesheet" href="{{asset('frontend/assets/css/rtl.css')}}" />
    @endif

@yield('css')
</head>

<body class="has-header-search">

<div id="app">

    @include('frontend.includes.header')

        @yield('content')

    @include('frontend.includes.footer')
</div>




<script src= "{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.nanoscroller.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/acmeticker.js')}}"></script>
<script src="{{asset('frontend/assets/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/script.js')}}"></script>

@if  (app() ->getLocale()=='en')

<script src="{{asset('frontend/assets/js/ltr.js')}}"></script>
@endif

@yield('js')
</body>
</html>
