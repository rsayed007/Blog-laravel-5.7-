<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layouts.frontEnd.partial.head')

    <!-- Fonts -->

    {{-- toster --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('frontEnd/common-css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{ asset('frontEnd/common-css/swiper.css')}}" rel="stylesheet">
	<link href="{{ asset('frontEnd/common-css/ionicons.css')}}" rel="stylesheet">

    @stack('frontCSS')


</head>
<body>
    @include('layouts.frontEnd.partial.header')

    @section('main-content')
        @show

    @include('layouts.frontEnd.partial.footer')

    
<!-- SCIPTS -->
@stack('frontJS')

    <script src="{{ asset('frontEnd/common-js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('frontEnd/common-js/tether.min.js')}}"></script>
    <script src="{{ asset('frontEnd/common-js/bootstrap.js')}}"></script>
    <script src="{{ asset('frontEnd/common-js/scripts.js')}}"></script>
</body>
</html>
