<div class="cart-panel">
	<div class="panel-body">
		<ul class="nav navbar-nav navbar-left">
			<li><a class="inherit" href="#">Checkout</a></li>
			<li><a class="inherit" href="{{ route('StoreCart') }}">
				<span><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> {{ $cartCount }} products</span>
			</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			@if($user)
			<li><a class="inherit" href="#">{{ $user->name }}</a></li>
			<li><a class="inherit" href="{{ route('StoreUserLogout') }}">Logout</a></li>
			@else
			<li><a class="inherit" href="{{ route('StoreUserLoginGet') }}">Login</a></li>
			<li><a class="inherit" href="{{ route('StoreUserRegisterGet') }}">Register</a></li>
			@endif
		</ul>
	</div>
</div>