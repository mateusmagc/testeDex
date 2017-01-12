<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/personalize.css')}}" rel="stylesheet">
		<link href="{{asset('js/owl/assets/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('js/owl/owl.theme.default.min.css')}}" rel="stylesheet">
    	<meta name="csrf-token" content="{{ csrf_token() }}" />
    
    </head>
    <body>
       @yield("content")
       @yield("footer")
    	<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>			
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/headroom.js')}}"></script><!-- Header 1 -->
		<script type="text/javascript" src="{{asset('js/jquery.headroom.js')}}"></script><!-- Header 1 -->
		<script type="text/javascript" src="{{asset('js/owl/owl.carousel.min.js')}}"></script><!-- Owl Carousel -->
		<script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script><!-- Content 2-7 Counter -->
		<script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script><!-- Gallery Filter -->
		<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script><!-- Gallery Popup -->
		<script type="text/javascript" src="{{asset('js/bskit-scripts.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
    	<script type="text/javascript"> $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }); </script>
       @yield("script")
    
    </body>
</html>
