
@if(!is_front_page())
	@php($breadcrumbs = get_region_halland_breadcrumbs_pages())
	@if(isset($breadcrumbs))

			<ul class="rh-breadcrumbs pl3 mx-auto" style="max-width:1440px;">
				@foreach ($breadcrumbs as $breadcrumb)
					<li class="rh-breadcrumbs__item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						@if ($breadcrumb['url'])
							<a class="rh-breadcrumbs__link rh-breadcrumbs__link--vuxhalland" href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['name'] !!}</a>
						@else
							<a class="rh-breadcrumbs__link rh-breadcrumbs__link--vuxhalland" href="" @if ($loop->last) aria-current="page" @endif>{!! $breadcrumb['name'] !!}</a>
						@endif
						<meta itemprop="position" content="{{ $loop->iteration }}">
					</li>
				@endforeach
			</ul>

	@endif
@endif