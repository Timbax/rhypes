<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','default') | Panel Administrativo </title>
	{{-- link id="bs-css" href="{{asset('plugins/bootstrap/css/bootstrap-cerulean.min.css')}}" rel="stylesheet"> --}}
    <meta name="author" content="Muhammad Usman">
    <meta charset="utf-8">
    <link href="{{asset('plugins/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    {{-- <link id="bs-css" href="{{asset('plugins/bootstrap/css/bootstrap-cerulean.min.css')}}" rel="stylesheet"> --}}

    <link href="{{asset('plugins/bootstrap/css/charisma-app.css')}}" rel="stylesheet">
    <link href='{{asset('plugins/bower_components/fullcalendar/dist/fullcalendar.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bower_components/fullcalendar/dist/fullcalendar.print.css')}}' rel='stylesheet' media='print'>
    <link href='{{asset('plugins/bower_components/chosen/chosen.min.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bower_components/colorbox/example3/colorbox.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bower_components/responsive-tables/responsive-tables.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bootstrap/css/jquery.noty.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bootstrap/css/noty_theme_default.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bootstrap/css/elfinder.min.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bootstrap/css/elfinder.theme.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bootstrap/css/jquery.iphone.toggle.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bootstrap/css/uploadify.css')}}' rel='stylesheet'>
    <link href='{{asset('plugins/bootstrap/css/animate.min.css')}}' rel='stylesheet'>

    <!-- jQuery -->
    <script src="{{asset('plugins/bower_components/jquery/jquery.min.js')}}"></script>

    
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="{{asset('plugins/bootstrap/img/logo.ico')}}">
</head>
<body>

		<section>
				@yield('content')
		</section>

</body>

</html>