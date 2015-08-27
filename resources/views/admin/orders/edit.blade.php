@extends('admin.master', ['title' => 'Change order #' . $order->id . ' status'])

@section('content')
<div class="col-sm-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Change order #{{ $order->id }} status</h3>
		</div>
		<div class="panel-body">
			{!! Form::model($order, ['method' => 'PATCH', 'url'=> route('AdminOrderUpdate', $order), 'class' => 'col-md-5']) !!}
				<div class="form-group">
					{!! Form::label('status_code_id', 'Status code:') !!}
					{!! Form::select('status_code_id', $statusCodes, null, ['class' => 'form-control']) !!}
				</div>
				{!! Form::submit('Update order status',  ['class' => 'btn btn-primary form-control']) !!}
			{!! Form::close() !!}
		</div>
	</div>
	@include('errors.list')
</div>

@endsection