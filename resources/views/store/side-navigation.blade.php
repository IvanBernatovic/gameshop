<div class="panel panel-brand">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Categories</h3>
	</div>
	<div class="panel-body navigation">
		<nav>
			<ul class="nav nav-pills nav-stacked">
				@foreach($categories as $node)
				{!! renderNode($node, true) !!}
				@endforeach
			</ul>
		</nav>
	</div>
</div>

