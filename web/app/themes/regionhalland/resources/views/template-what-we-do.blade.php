{{--

    Template Name: Vad vi gör

--}}

@extends('layouts.app')

@section('content')
    
    @include('partials.content.hero')
    @include('partials.content.ingress-with-navigation', ['ingress_text' => get_region_halland_acf_page_ingress()])

    {{-- Huvudinnehåll --}}
    @while(have_posts()) @php(the_post())
        <main id="main">
            <div class="mx-auto" style="max-width: 1440px; background: #FBF9F4;">
                <div class="center px4 pt2 pb3 rh-article">
                    
                    <main class="clearfix">
                    
                        @php($myPages = get_region_halland_page_children())
                        @if(isset($myPages))
                            @foreach ($myPages as $myChilds)
                                <div class="col col-12 sm-col-12 md-col-6 lg-col-4" style="height:350px; overflow: hidden; display: flex; flex-wrap: wrap; justify-content: center;">
                                    <div class="p1" style="display: block;">
                                        <img src="{{ $myChilds->image_url }}" style="width:400px; height: 300px;" />

                                        <p style="display:block;">
                                            <strong>
                                                <a class="rh-link--navigation" href="{{ $myChilds->url }}">
                                                    {{ $myChilds->post_title }}
                                                </a>
                                            </strong>
                                        </p>

                                    </div>

                                </div>
                            @endforeach
                        @endif

                    </main>
                </div>
            </div>
        </main>
    @endwhile

@endsection