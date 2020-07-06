<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{url('website')}}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('website')}}/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{url('website')}}/css/responsive.css">
<!-- Title -->
<title>MGS Pubblicità</title>
<!-- Favicon -->
<link href="{{url('website/')}}/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{url('website/')}}/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	{{-- @include('website.layouts.header-top') --}}
	<!-- Main Header Nav -->
	@include('website.layouts.header')


	<!-- Home Design -->
	@yield('content')

	@include('website.layouts.footer')
<a class="scrollToHome home3" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->

{{-- @stack('script') --}}
<script type="text/javascript" src="{{url('website/')}}/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/popper.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/isotop.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/snackbar.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/simplebar.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/parallax.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/scrollto.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/wow.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/progressbar.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/slider.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/timepicker.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{url('website')}}/js/script.js"></script>
@stack('script')
</body>
</html>
