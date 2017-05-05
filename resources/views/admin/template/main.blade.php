<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Defauld') </title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<section>
			@include('admin.template.nav')
		</section>
		<section>
			@yield('content','<hr> Contenido <hr>')
		</section>
		<section>
			@include('admin.template.footer')		
		</section>
	</div>
		

	<script src="{{ asset ('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
	<script src="{{ asset ('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>