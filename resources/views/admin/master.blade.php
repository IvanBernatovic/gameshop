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
	@include('admin.navigation')
	<div class="container-fluid">
		<div class="row">
			@include('admin.sidebar')
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				@if(Session::has('status'))
				<div class="alert alert-warning alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ Session::get('status') }}
				</div>
				@endif
				@yield('content')
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/Chart.min.js') }}"></script>
	@include('admin.chart-script')
</body>
</html>