<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"> 

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/materialize/css/materialize.min.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('styles/site-styles.css') }}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/fontawesome/js/fontawesome-all.js') }}"></script>

</head>
<body>
    @include('site.templates.partials.nav')
    
    <!--div class="container"-->
        
        @yield('content')

    <!--/div-->

    @yield('js')

    @include('site.templates.partials.footer')
</body>
