<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ isset($title) ? $title : "Gameshop - Buy yourself virtual fun" }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>
	<div class="container">
		@include('store.header')
		<div class="row">
			@yield('content')
		</div>
		@include('store.footer')
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>