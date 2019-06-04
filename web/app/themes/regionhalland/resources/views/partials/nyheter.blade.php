@if(function_exists('get_region_halland_get_page_news_simple'))
	@php($myNews = get_region_halland_get_page_news_simple(3))	
	@if(isset($myNews))
		<div class="container mx-auto pl4 pr4 pb1 pt0">
			<div class="m4">
				<div class="pb3 ml3">
					<h2>Vilket yrke passar dig?</h1>
				</div>
				<div class="container mx-auto">
					<div class="flex flex-wrap">
						@foreach ($myNews as $myNyhet)
						<div class="col-12 lg-col-4">
							<div class="pb3 pl0 pr0 pt0">
								<div class="mb2 small p2">
									{!! $myNyhet->image !!}
								</div>
								<div class="pr2 pl2 pb2 pt0">
									<h2 class="h4"><a href="{{ $myNyhet->url }}">{{ $myNyhet->post_title }}</a></h2 class="h3">
								</div>
								<div class="h5 pl2 pr2 pb3">{{ $myNyhet->description }}</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	@endif
@endif