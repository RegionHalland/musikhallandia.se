{{--

    Template Name: Om oss

--}}

@extends('layouts.app')
@section('content')
    @include('partials.hero')
    <div style="background: #EFE7DA;">
        <div class="mx-auto" style="max-width: 1440px;">
            @if(function_exists('get_region_halland_page_children'))
                <ul class="py2">
                @php($myPages = get_region_halland_page_children())
                @if(isset($myPages))
                    @foreach ($myPages as $myChilds)
                        <li class="mx1" style="display:inline;">
                            <a href="{{ $myChilds->url }}">{{ $myChilds->post_title }}</a>
                        </li>
                    @endforeach
                @endif
                </ul>
            @endif
        </div>
    </div>

    {{-- Huvudinnehåll --}}
    @while(have_posts()) @php(the_post())
    <div style="background: #FBF9F4;">
        <div class="center px4 pt2 pb3 rh-article clearfix" style="max-width: 1440px;">
            <main class="col col-12 md-col-8">
                <h1>{{ the_title() }}</h1>
                <p><strong>{{ get_region_halland_acf_page_ingress() }}</strong></p>
                <p>{!! the_content() !!}</p>
                <h2>Vi samarbetar med</h2>
                <div class="p3" style="background: #EDEDED;">
                    Loggor
                </div>
            </main>
        </div>
    </div>

    @endwhile



    @include('partials.newsletter')

@endsection


