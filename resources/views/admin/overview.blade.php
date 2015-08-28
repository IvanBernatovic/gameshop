@extends('admin.master', ['title' => 'Admin panel - Overview'])

@section('content')

<div class="page-header">
	<h2>Last 7 days - ${{App\Models\Order::whereBetween('created_at', [Carbon\Carbon::today()->subDays(6), Carbon\Carbon::now()])->get()->sum('full_price')}}
	<small>{{ Carbon\Carbon::today()->subDays(6)->toFormattedDateString() }} - {{ Carbon\Carbon::today()->toFormattedDateString() }}</small></h2>
	
</div>
<div class="row">
	<canvas id="moneyChart" class="col-xs-12"></canvas>
</div>

@endsection