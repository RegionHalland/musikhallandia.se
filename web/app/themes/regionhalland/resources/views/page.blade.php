{{--

    Template Name: Sektionssida page

--}}

@extends('layouts.app')

@section('content')

	@include('partials.content.hero')
	@include('partials.navigation.nav-level2')
	<main>
		<div class="rh-xpad-A pt3 pb3" style="background: #FBF9F4">
			<div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
				<div class="clearfix">
					{{-- Content --}}
					<div class="col col-12 md-col-9 rh-article">
						@while(have_posts()) @php(the_post())
						<h1>{{ $post->post_title }}</h1>

						<strong>
							{{ get_region_halland_acf_page_ingress() }}
						</strong>

						<p>
							{{ the_content() }}
						</p>
						@endwhile
					</div>
				</div>
			</div>
		</div>

		{{-- Blurbs på nedre delen av sidan --}}
		@php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
		@if($myBlurbs)
			<div class="rh-xpad-A pt3 pb3" style="background: #EFE7DA;">
				<div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
					<ul>
						@foreach ($myBlurbs as $blurbs)
							<li class="pb4">
								<div class="clearfix">
									<div class="mr3" style="float:left;">
										{!! $blurbs['image'] !!}
									</div>
									<h2>{{ $blurbs['post_title'] }}</h2>
									{{ $blurbs['post_content'] }}
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		@endif

	</main>
	@include('partials.content.newsletter')
@endsection
