<li>
	<span>{{ $item['post_title'] }}</span>
	@if (!empty($item['children']))
	<ul>
		@foreach($item['children'] as $item)
			@include('partials.navigation.nav-tree-child-list')
		@endforeach
	</ul>
	@endif
</li>