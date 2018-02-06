<!DOCTYPE html>
<html class="no-js chrome" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>{{ isset($title) ? $title : '' }} | {{ $site_name }}</title>

    {{--  seo  --}}
    @include('layouts.partials.seo-header')
        
    {{--  styles  --}}
    <link rel="stylesheet" href="/templates/dashy/assets/css/bootstrap.min.css">
    {{--  <link rel="stylesheet" href="/templates/dashy/assets/css/jquery-jvectormap-2.0.3.min.css">  --}}
    {{--  <link rel="stylesheet" href="/templates/dashy/assets/css/morris.min.css">  --}}
    
    {{--  page specific styles  --}}
    @yield('pre-styles')

    <!-- Custom Css -->
    <link rel="stylesheet" href="/templates/dashy/assets/css/main.css">
    <link rel="stylesheet" href="/templates/dashy/assets/css/authentication.css">
    <link rel="stylesheet" href="/templates/dashy/assets/css/color_skins.css">
    {{--  other stles  --}}
    @yield('styles')

</head>

<body class="theme-purple authentication sidebar-collapse">
    {{--  top bar + nav --}}
    @include('templates.dashy.layouts.partials.auth-nav')
    
    <!-- Main Content -->
    <div class="page-header">
        <div class="page-header-image" style="background-image:url(/templates/dashy/assets/img/login.jpg)"></div>
        <div class="container">
            {{--  content  --}}
            @yield('content')
        </div>

        {{--  footer  --}}
        @include('templates.dashy.layouts.partials.auth-footer')        
    </div>

    {{--  scripts  --}}
    {{--  jquery  --}}
    {{ Html::script('/js/jquery-3.2.1.min.js') }}
    {{--  bootstrap  --}}
    {{ Html::script('/bootstrap4/js/bootstrap.min.js') }}
    {{--  slimscroll  --}}
    {{ Html::script('/templates/dashy/assets/js/jquery.slimscroll.min.js') }}
    {{--  screenfull  --}}
    {{ Html::script('/templates/dashy/assets/js/screenfull.min.js') }}
    {{--  count-to  --}}
    {{--  waves  --}}
    {{ Html::script('/templates/dashy/assets/js/waves.min.js') }}

    {{--  age pecific scripts  --}}
    @yield('pre-scripts')

    {{--  seo  --}}
    @include('layouts.partials.tracking')

    {{--  additional scripts  --}}
    @yield('scripts')

    </body>

</html>