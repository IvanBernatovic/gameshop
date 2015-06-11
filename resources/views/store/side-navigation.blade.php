<div>
	<nav>
		<ul class="nav nav-pills nav-stacked">
		@foreach($categories as $node)
		{!! renderNode($node) !!}
		@endforeach
		</ul>
	</nav>
</div>