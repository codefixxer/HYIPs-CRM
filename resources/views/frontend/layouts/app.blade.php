<!doctype html>
<html lang="en">

<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Premium HTML5 Template by Indonez">
	<meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
	<meta name="author" content="Indonez">
	<meta name="theme-color" content="#22c55e">
	<!-- preload assets -->
	<link rel="preload" href="{{ asset('asset/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('asset/fonts/fa-solid-900.woff2" as="font')}}" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('asset/fonts/archivo-v18-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('asset/fonts/archivo-v18-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('asset/fonts/archivo-v18-latin-700.woff2')}}" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{{ asset('asset/css/style.css') }}" as="style">
	<link rel="preload" href="{{ asset('asset/js/vendors/uikit.min.js') }}" as="script">
	<link rel="preload" href="{{ asset('asset/js/utilities.min.js') }}" as="script">
	<link rel="preload" href="{{ asset('asset/js/config-theme.js') }}" as="script">
	<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
	<script src="{{ asset('asset/js/vendors/uikit.min.js') }}"></script>
    <link rel="icon" href="{{ asset('asset/img/logo.png') }}" type="image/png" sizes="32x32">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('asset/img/apple-touch-icon.png') }}">
	<title>Solana - Network</title>
</head>

<body style="background-color: rgb(29, 30, 36) !important;">
	<!-- page loader begin -->
	<div class="page-loader">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<!-- page loader end -->
	<!-- header begin -->
	@include('frontend.layouts.header')
	<!-- header end -->
@yield('content')
	<!-- footer begin -->
	@include('frontend.layouts.footer')

	<!-- footer end -->
	<!-- to top begin -->
	<a href="#" class="to-top uk-visible@m" data-uk-scroll>
		Top<i class="fas fa-chevron-up" ></i>
	</a>
	<!-- to top end -->
	<!-- javascript -->
	<script src="{{ asset('asset/js/vendors/tradingview-widget.min.js')}}"></script>
	<script src="{{ asset('asset/js/vendors/particles.min.js')}}"></script>
	<script src="{{ asset('asset/js/config-particles.js')}}"></script>
	<script src="{{ asset('asset/js/utilities.min.js')}}"></script>
	<script src="{{ asset('asset/js/config-theme.js')}}"></script>
</body>

</html>