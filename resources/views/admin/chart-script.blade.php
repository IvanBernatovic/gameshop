
<?php
	$today = Carbon\Carbon::today();
?>
<script type="text/javascript">
	// Get context with jQuery - using jQuery's .get() method.
	var ctx = $("#moneyChart").get(0).getContext("2d");
	
	var data = {
		labels: ["{{ Carbon\Carbon::today()->subDays(6)->toFormattedDateString() }}", 
			"{{ Carbon\Carbon::today()->subDays(5)->toFormattedDateString() }}", 
			"{{ Carbon\Carbon::today()->subDays(4)->toFormattedDateString() }}", 
			"{{ Carbon\Carbon::today()->subDays(3)->toFormattedDateString() }}", 
			"{{ Carbon\Carbon::today()->subDays(2)->toFormattedDateString() }}", 
			"{{ Carbon\Carbon::today()->subDay()->toFormattedDateString() }}", 
			"{{ Carbon\Carbon::today()->toFormattedDateString() }}"],
		datasets: [
		{
			label: "Amount dataset",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: ["{{App\Models\Order::whereDate('created_at', '=', Carbon\Carbon::today()->subDays(6))->get()->sum('full_price')}}", 
				"{{App\Models\Order::whereDate('created_at', '=', Carbon\Carbon::today()->subDays(5))->get()->sum('full_price')}}", 
				"{{App\Models\Order::whereDate('created_at', '=', Carbon\Carbon::today()->subDays(4))->get()->sum('full_price')}}", 
				"{{App\Models\Order::whereDate('created_at', '=', Carbon\Carbon::today()->subDays(3))->get()->sum('full_price')}}", 
				"{{App\Models\Order::whereDate('created_at', '=', Carbon\Carbon::today()->subDays(2))->get()->sum('full_price')}}", 
				"{{App\Models\Order::whereDate('created_at', '=', Carbon\Carbon::today()->subDay())->get()->sum('full_price')}}", 
				"{{App\Models\Order::whereDate('created_at', '=', Carbon\Carbon::today())->get()->sum('full_price')}}"]
		}
		]
	};

	var myLineChart = new Chart(ctx).Bar(data);
</script>