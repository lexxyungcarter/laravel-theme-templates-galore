<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>{{ isset($title) ? $title : '' }} | {{ $site_name }}</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		{{--  seo  --}}
		@include('layouts.partials.seo-header')
		
		{{--  header styles + scripts  --}}
		<!-- bootstrap & fontawesome -->
		{{ Html::style('/templates/ace/assets/css/bootstrap.min.css') }}
		{{ Html::style('/templates/ace/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}

		<!-- page specific plugin styles -->
		@yield('pre-styles')

		<!-- text fonts -->
		{{ Html::style('/templates/ace/assets/css/fonts.googleapis.com.css') }}

		<!-- ace styles -->
		{{ Html::style('/templates/ace/assets/css/ace.min.css') }}

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		{{ Html::style('/templates/ace/assets/css/ace-skins.min.css') }}
		{{ Html::style('/templates/ace/assets/css/ace-rtl.min.css') }}

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		{{ Html::script('/templates/ace/assets/js/ace-extra.min.js') }}

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		{{--  custom style goes here --}}

        {{--  yield additional styles  --}}
        @yield('styles')
		
    </head>

    <body class="no-skin">
        {{--  header + nav  --}}
        @include('templates.ace.layouts.partials.header')
        
        <div class="main-container ace-save-state" id="main-container">
            {{--  sidebar  --}}
            @include('templates.ace.layouts.partials.sidebar')
            
            {{--  main content  --}}
            <div class="main-content">
                <div class="main-content-inner">
                    {{--  breadcrumb  --}}
                    @include('templates.ace.layouts.partials.breadcrumb')
                    
                    <div class="page-content">
                        {{--  ace settings pallete  --}}
                        @include('templates.ace.layouts.partials.settings')
                        
                        {{--  page-header  --}}
                        @include('templates.ace.layouts.partials.page-header')

                        {{--  yield content  --}}
                        @yield('content')
                    </div>
                    
                </div>
            </div>
    
            {{--  footer  --}}
            @include('templates.ace.layouts.partials.footer')

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

		<!--[if !IE]> -->
		{{ Html::script('/templates/ace/assets/js/jquery-2.1.4.min.js') }}

		<!-- <![endif]-->

		<!--[if IE]>
        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/templates/ace/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		{{ Html::script('/templates/ace/assets/js/bootstrap.min.js') }}
		
		<!-- page specific plugin scripts -->
		{{--  yield pre-scripts --}}
		@yield('pre-scripts')

		<!-- ace scripts -->
		{{ Html::script('/templates/ace/assets/js/ace-elements.min.js') }}
		{{ Html::script('/templates/ace/assets/js/ace.min.js') }}

		{{--  seo  --}}
        @include('layouts.partials.tracking')

		<!-- inline scripts related to this page -->
        {{--  yield additional scripts  --}}
        @yield('scripts')

	</body>
</html>
