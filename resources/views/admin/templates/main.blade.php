<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','default') Panel de Administracion</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css') }}">



	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/fontawesome/js/fontawesome-all.js') }}"></script>

</head>
<body>
	@include('admin.templates.partials.nav')
	
	<div class="container">
		

		@include('flash::message')
		<script>
	    	$('#flash-overlay-modal').modal();
		</script>

		@yield('encabezado')

		@yield('content')

	</div>

	@yield('js')

</body>
</html>