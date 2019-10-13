<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layouts.backEnd.partial.head')

    @stack('backCSS')

</head>

<body class="theme-red">

    @include('layouts.backEnd.partial.header')

    @include('layouts.backEnd.partial.sidebar')

    @section('main-content')
        @show

    @include('layouts.backEnd.partial.footer')
</body>

</html>
