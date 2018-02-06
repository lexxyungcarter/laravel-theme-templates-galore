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
    {{--  other styles  --}}
    @yield('styles')
    
    <link rel="stylesheet" href="/templates/dashy/assets/css/color_skins.css">

</head>

<body class="theme-purple @yield('body-class')">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="zmdi-hc-spin" src="/templates/dashy/assets/img/logo.svg" width="48" height="48" alt="Oreo">
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    {{--  top bar + nav --}}
    @include('templates.dashy.layouts.partials.header')
    
    {{--  yield menu-type: could be leftsidebar or menu --}}
    @yield('sidebar')
    
    {{--  right sidebar  --}}
    @include('templates.dashy.layouts.partials.right-sidebar')
    
    {{--  chat launcher  --}}
    @include('templates.dashy.layouts.partials.chat')
    
    <!-- Main Content -->
    <section class="content @yield('page-class')">
        {{--  breadcrumb  --}}
        @include('templates.dashy.layouts.partials.breadcrumb')

        <div class="container-fluid">
            {{--  content  --}}
            @yield('content')
        </div>
    </section>

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

    {{--  main script  --}}
    <script src="/templates/dashy/assets/js/main.js"></script>

    {{--  seo  --}}
    @include('layouts.partials.tracking')

    {{--  additional scripts  --}}
    @yield('scripts')

    </body>

</html>