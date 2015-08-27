@extends('admin.master', ['title' => 'Change order #' . $order->id . ' status'])

@section('content')
<div class="col-sm-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Change order #{{ $order->id }} status</h3>
		</div>
		<div class="panel-body">
			{!! Form::open() !!}

			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection