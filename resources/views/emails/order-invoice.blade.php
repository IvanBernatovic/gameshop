<div>
	<h3>Order information</h3>
	<dl>
		<dt>Customer</dt>
		<dd>#{{ $order->user->id }} {{ $order->user->name }}</dd>

		<dt>Order status</dt>
		<dd>{{ $order->status_code->name }}</dd>

		<dt>Order date and time</dt>
		<dd>{{ $order->created_at->format('d.m.Y.  H:i:s e') }}</dd>

		<dt>Adddress</dt>
		<dd>{{ $order->address->name }}</dd>
		<dd>{{ $order->address->street }}</dd>
		<dd>{{ $order->address->ZIP . ' ' . $order->address->city }}</dd>
		<dd>{{ $order->address->country->name }}{{ $order->address->state_id ? ', ' . $order->address->state->name : '' }}</dd>
		<dt>Payment method</dt>
		<dd>{{ $order->payment_method->name }}</dd>

		<dt>Weight</dt>
		<dd>{{ $order->weight }}</dd>
	</dl>
</div>

<ul>
	@foreach($order->products as $productItem)
	<a href="{{ route('StoreProductShow', $productItem->product->slug) }}" target="_blank">
		<li>{{ $productItem->product->name }}, x{{ $productItem->quantity }}, ${{ $productItem->price * $productItem->quantity }} </li>
	</a>
	@endforeach
	@if( $order->full_price < 150 - 15)
	<li>Shipping (if order is under $150), $15</li>
	@endif
	<li><strong>Total: ${{ $order->full_price }}</strong></li>
</ul>

<p>Thank you for you purchase. Your order has been recieved and it will be shipped as soon as possible.</p>