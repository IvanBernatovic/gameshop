<div class="col-sm-12 cart-panel">
	<div class="panel-body">
		<div class="input-group col-md-3">
			<form id="search-form" method="GET" action="{{ route('StoreProductSearch') }}">
				<input name="q" type="text" class="form-control" placeholder="Search products...">
			</form>
			<span class="input-group-btn">
				<button form="search-form" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			</span>
		</div>
		<ul class="nav navbar-nav navbar-left">
			<li><a class="inherit" href="{{ route('StoreCartCheckout') }}">Checkout</a></li>
			<li><a class="inherit" href="{{ route('StoreCart') }}">
				<span><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> {{ $cartCount }} product(s)</span>
			</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			@if($user)
			<li><a class="inherit" href="{{ route('StoreUserProfile') }}">{{ $user->name }}</a></li>
			<li><a class="inherit" href="{{ route('StoreUserLogout') }}">Logout</a></li>
			@else
			<li><a class="inherit" href="{{ route('StoreUserLoginGet') }}">Login</a></li>
			<li><a class="inherit" href="{{ route('StoreUserRegisterGet') }}">Register</a></li>
			@endif
		</ul>
	</div>
</div>