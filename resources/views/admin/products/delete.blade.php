@extends('admin.master', ['title' => 'Are you sure?'])

@section('content')
<div class="col-sm-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				{{ $product->name . ' ('. $product->slug . ')'}}
			</h3>
		</div>
		<div class="panel-body">
			<div class="alert alert-danger" role="alert">Are you sure you want to delete this product?</div>
			{!! Form::model($product, ['method' => 'DELETE', 'url' => route('AdminProductDestroy', $product->slug)]) !!}
			{!! Form::submit('Yes, delete product', ['class' => 'btn btn-danger']) !!}
			<a class="btn btn-default" href="{{ route('AdminProductShow', $product->slug) }}" role="button">No, go back</a>
			{!! Form::close() !!}

		</div>
	</div>
</div>

@endsection