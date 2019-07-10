{{--

    Template Name: Om oss

--}}

@extends('layouts.app')
@section('content')
    
    @include('partials.content.hero')
    @include('partials.navigation.nav-level2')
    
    {{-- Huvudinnehåll --}}
    @while(have_posts()) @php(the_post())
    
        <div class="mx-auto" style="max-width: 1440px; background: #FBF9F4;">
            <div class="center px4 pt2 pb3 rh-article clearfix" style="max-width: 1440px;">
                <main id="main" class="col col-12 md-col-8">
                    <h1>{{ the_title() }}</h1>
                    <p><strong>{{ get_region_halland_acf_page_ingress() }}</strong></p>
                    <p>{!! the_content() !!}</p>

                    {{-- Box med loggor för samarbetspartners --}}
                    <h2>Vi samarbetar med</h2>
                    <div class="p3" style="background: #EDEDED;">
                        Loggor
                    </div>

                </main>
            </div>
        </div>

    @endwhile

@endsection


