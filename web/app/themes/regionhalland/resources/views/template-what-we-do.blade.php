{{--

    Template Name: Vad vi gör

--}}

@extends('layouts.app')
@section('content')
    @include('partials.content.hero')
    @include('partials.content.ingress-with-navigation', ['ingress_text' => get_region_halland_acf_page_ingress()])

    {{-- Huvudinnehåll --}}
    @while(have_posts()) @php(the_post())
        <div class="mx-auto" style="max-width: 1440px; background: #FBF9F4;">
            <div class="center px4 pt2 pb3 rh-article">
                <main class="clearfix">
                    @if(function_exists('get_region_halland_page_children'))
                        @php($myPages = get_region_halland_page_children())
                        @if(isset($myPages))
                            @foreach ($myPages as $myChilds)
                                <div class="col col-12 sm-col-6 md-col-4" style="height:400px; overflow: hidden; display: flex; flex-wrap: wrap; justify-content: center;">
                                    <div class="p1" style="display: block;">
                                        <img src="{{ $myChilds->image_url }}" style="width:400px; height: 250px;" />
                                        <p style="display:block;"><a href="{{ $myChilds->url }}">{{ $myChilds->post_title }}</a></p>
                                    </div>

                                </div>
                            @endforeach
                        @endif
                    @endif
                </main>
            </div>
        </div>

    @endwhile

    @include('partials.content.newsletter')

@endsection