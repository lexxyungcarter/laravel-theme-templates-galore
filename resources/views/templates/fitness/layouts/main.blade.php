<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ isset($title) ? $title : '' }} | {{ $site_name }}</title>

	{{--  seo  --}}
	@include('layouts.partials.seo-header')
	
	{{--  header styles + scripts  --}}
	<!-- page specific plugin styles -->
	@yield('pre-styles')
	
	{{--  main  --}}
	{{ Html::style('/templates/fitness/assets/css/main.min.css') }}

	{{--  yield additional styles  --}}
	@yield('styles')

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body class="mobile-shift">

	{{--  header + nav  --}}
	@include('templates.fitness.layouts.partials.header')

	{{--  content  --}}
	@yield('content')

	{{--  footer  --}}
	@include('templates.fitness.layouts.partials.footer')

	{{--  scripts  --}}
	{{ Html::script('/templates/fitness/assets/js/jquery.min.js') }}

	<!-- page specific plugin scripts -->
	{{--  yield pre-scripts --}}
	@yield('pre-scripts')
	
	{{--  seo  --}}
	@include('layouts.partials.tracking')

	{{--  main script  --}}
	{{ Html::script('/templates/fitness/assets/js/functions.min.js') }}
	
	<!-- inline scripts related to this page -->
	{{--  yield additional scripts  --}}
	@yield('scripts')
</body>
</html>