<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ isset($title) ? $title : "Gameshop - Admin panel" }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body class="admin">
	<div class="alert alert-danger" role="alert">
		<div class="container text-center">
			<h4><strong>WARNING!</strong> This is a demo site made for educational purposes by Ivan Bernatović. This is not production site.</h4>
		</div>
	</div>
	@yield('main')

	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/Chart.min.js') }}"></script>
	@include('admin.chart-script')
</body>
</html>