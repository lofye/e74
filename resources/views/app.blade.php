<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('blog.title') }}</title>

	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">

</head>
<body>
	@include('flash::message')
	@include('partials.nav')
	
	<div class="container">
        @yield('content')
	</div>
	
	<div class="flash">
		Updated!
	</div>

    <footer>
        <div>Powered by Purpose</div>
        <div>Engine SevenFour is a subsidiary of rTraction Canada, Inc. &copy; Copyright 2015 rTraction Canada, Inc.</div>
        <div>The London Roundhouse, 240 Waterloo Street, London, On, N6B 2N4</div>
        <div>Proudly built in London, Ontario.</div>
    </footer>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="/js/all.js"></script>
</body>
</html>