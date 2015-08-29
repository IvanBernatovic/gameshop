@extends('admin.master', ['title' => 'Admin panel - Customers'])

@section('content')



<div class="categories">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Country</th>
				<th>Date registered</th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $customer)
			<tr data-href="{{ route('AdminCustomerShow', $customer) }}">
				<td>{{ $customer->id }}</td>
				<td>{{ $customer->name }}</td>
				<td>{{ $customer->address->country->name }}</td>
				<td>{{ $customer->created_at->format('d.m.Y.  H:i:s') }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{!! $customers->render() !!}

@endsection