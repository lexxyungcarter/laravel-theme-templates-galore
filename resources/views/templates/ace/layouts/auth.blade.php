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
		
		<!-- bootstrap & fontawesome -->
		{{ Html::style('/templates/ace/assets/css/bootstrap.min.css') }}
		{{ Html::style('/templates/ace/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}

		<!-- text fonts -->
		{{ Html::style('/templates/ace/assets/css/fonts.googleapis.com.css') }}

		<!-- ace styles -->
		{{ Html::style('/templates/ace/assets/css/ace.min.css') }}

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/templates/ace/assets/css/ace-part2.min.css" />
		<![endif]-->
		{{ Html::style('/templates/ace/assets/css/ace-rtl.min.css') }}

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/templates/ace/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/templates/ace/assets/js/html5shiv.min.js"></script>
		<script src="/templates/ace/assets/js/respond.min.js"></script>
		<![endif]-->

        {{--  yield additional styles  --}}
        @yield('styles')
		
    </head>

    <body class="login-layout">
        
        <div class="main-container">

            {{--  main content  --}}
            <div class="main-content">
				{{--  yield content  --}}
				@yield('content')

            </div>
        </div><!-- /.main-container -->

        <!-- basic scripts -->
		{{ Html::script('/templates/ace/assets/js/jquery-2.1.4.min.js') }}

		<!--[if IE]>
        <script src="/templates/ace/assets/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/templates/ace/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		{{ Html::script('/templates/ace/assets/js/bootstrap.min.js') }}

		{{--  seo  --}}
        @include('layouts.partials.tracking')

        {{--  yield additional scripts  --}}
        @yield('scripts')

	</body>
</html>
