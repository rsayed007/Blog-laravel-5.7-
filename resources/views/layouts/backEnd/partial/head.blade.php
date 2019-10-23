
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')-{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    {{-- toster --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{ asset('backEnd/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{ asset('backEnd/plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{ asset('backEnd/plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="{{ asset('backEnd/plugins/morrisjs/morris.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{ asset('backEnd/css/style.css')}}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('backEnd/css/themes/all-themes.css')}}" rel="stylesheet" />