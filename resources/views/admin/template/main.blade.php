<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Defauld') </title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
		<section>
			@include('admin.template.nav')
		</section>
		<section>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="text-info">@yield('sub-title')</h4>
				</div>
				<div class="panel-body">
					<br>
					@yield('content')
				</div>
			</div>
		</section>
		<section>
			@include('admin.template.footer')				
		</section>
	</div>
		

	<script src="{{ asset ('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
	<script src="{{ asset ('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>


  
  