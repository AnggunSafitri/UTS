<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	
    <meta name="author" content="">
    <title>Anggun Safitri - Blog</title>
	
    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('public/web') }}/bulan.png" />
	
    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" href="{{ url('public/web') }}/images/apple-touch-icon-114x114-precomposed.png">
	
    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" href="{{ url('public/web') }}/images/apple-touch-icon-72x72-precomposed.png">
	
    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="{{ url('public/web') }}/images/apple-touch-icon-57x57-precomposed.png">
	
    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/libraries/lib.css">
	
    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/css/navigation-menu.css">
	
    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/style.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/css/shortcode.css">
	
    <!--[if lt IE 9]>		
		<script src="{{ url('public/web') }}/js/html5/respond.min.js"></script>    
	<![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div><!-- Loader /- -->
	
    <!-- Header -->
    @include('section.web.header')
    <!-- Header /- -->
	
   
    <!-- Blog right  -->
    @yield('content')
    <!-- Blog Right /- -->
	
    @include('section.web.footer')
    <!-- Footer Bottom /- -->
	
    <!-- JQuery v1.12.4 -->
    <script src="{{ url('public/web') }}/js/jquery.min.js"></script>
    <script src="{{ url('public/web') }}/js/jquery.knob.js"></script>
	
    <!-- Library - Js -->
    <script src="{{ url('public/web') }}/libraries/lib.js"></script>
    <script src="{{ url('public/web') }}/libraries/number/jquery.animateNumber.min.js"></script>
	
    <!-- Library - Theme JS -->
    <script src="{{ url('public/web') }}/js/functions.js"></script>
</body>

</html>