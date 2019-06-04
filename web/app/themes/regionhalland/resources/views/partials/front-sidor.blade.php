@if(function_exists('get_region_halland_main_post_settings_vuxhalland_front'))
	@php($myPages = get_region_halland_main_post_settings_vuxhalland_front())	
	@if(isset($myPages))
		<div class="container mx-auto pl4 pr4 pb0 pt2">
			<div class="m4">
				<div class="container mx-auto">
					<div class="flex flex-wrap">
						<div class="col-12 lg-col-3">
							<div class="pb3 pl3 pr3 pt0">
								<div class="pb2 h3 strong">
									<svg class="icon-badge icon-badge--md mr1" viewBox="0 0 8 8">
			                            {!! get_region_halland_icon('chevron-right') !!}
			                        </svg>
                        			<a href="{!! env('WP_HOME') !!}/sok-utbildning/">Sök utbildningar</a>
								</div>
								<div class="h4 pb3">Vilka drömmar har du? Hitta din utbidldning hos oss</div>
							</div>
						</div>
						@foreach ($myPages as $myPage)
						<div class="col-12 lg-col-3">
							<div class="pb3 pl3 pr3 pt0">
								<div class="pb2 h3 strong">
									<svg class="icon-badge icon-badge--md mr1" viewBox="0 0 8 8">
			                            {!! get_region_halland_icon('chevron-right') !!}
			                        </svg>
                        			<a href="{{ $myPage->url }}">{{ $myPage->post_title }}</a>
								</div>
								<div class="h4 pb3">{{ $myPage->description }}</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	@endif
@endif