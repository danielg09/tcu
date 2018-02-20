<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Administración')</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/fontawesome/css/font-awesome.min.css') }}">


	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<style type="text/css">
	
		.center-block {
		  display: block;
		  margin-left: auto;
		  margin-right: auto;
		}
	</style>

</head>
<body>

	<div class="container">

		@yield('header')
	
		@yield('content')

	</div>

	@yield('js')

</body>
</html>