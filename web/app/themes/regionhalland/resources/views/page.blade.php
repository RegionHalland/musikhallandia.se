@extends('layouts.app')

@section('content') 	

	<div class="rh-xpad-A pt3 pb3 clearfix center" style="max-width: 1440px;background: #FBFAF9">
		<div class="rh-xpad-B pt3 pb3" style="background: white;">
			<main>

				{{-- Back button component: --}}
				@php($myParentPage = get_region_halland_parent_page())
					<div class="pb3">
						@if($myParentPage['has_back'] == 1)
							<a href="{{$myParentPage['url']}}" class="rh-round-button--vuxhalland rh-round-button icon-arrow-left"></a>
							<a href="{{$myParentPage['url']}}" class="pl1 rh-link--navigation">{{$myParentPage['post_title']}}</a>

						@else
							<a href="/" class="rh-round-button--vuxhalland rh-round-button icon-arrow-left"></a>
							<a href="/" class="pl1 rh-link--navigation">Startsidan</a>
						@endif
					</div>

				<div class="clearfix">
					<div class="col col-12 md-col-9 rh-article">
						@while(have_posts()) @php(the_post())
						<h1>{{ $post->post_title }}</h1><br><br>
						@if(function_exists('get_region_halland_prepare_the_content'))
							@php(get_region_halland_prepare_the_content())
						@endif
						{{ the_content() }}
						@endwhile
					</div>
					<div class="pl4 col col-12 md-col-3">
						@include('partials.content-nav')
					</div>
				</div>

			</main>
		</div>



	</div>

	{{--
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<div class="background-white">
		<div class="background-white">
			<div class="container mx-auto p4">
				<div class="m2 flex flex-wrap">

					<div class="col-12 lg-col-3">

						@include('partials.nav-sidebars')

						<div class="pt2">&nbsp;</div>

						@include('partials.content-nav')

					</div>

					<!-- ************ -->
					<!-- Page content -->
					<!-- ************ -->
					<div class="col-12 lg-col-9">
						<main class="ml4">

							<div>
								<h1>{{ the_title() }}</h1>
							</div>

							<div id="main">
								@while(have_posts()) @php(the_post())
									@include('partials.article')
									@include('partials.entry-meta')
								@endwhile
							</div>

						</main>
					</div>

				</div>
			</div>
		</div>
	</div> --}}

@endsection
