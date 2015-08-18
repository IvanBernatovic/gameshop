<div class="panel-heading text-center">
	<h3 class="panel-title">
		<ol class="breadcrumb">
			@foreach($category->getAncestorsAndSelf() as $parent)
			<li><a class ="a-bread"
				@if($parent->isLeaf()) href="{{ route('StoreCategoryShow', $parent->slug) }}"
				@else href="#"
				@endif >{{ $parent->name }}</a></li>
			@endforeach
		</ol>
	</h3>
</div>