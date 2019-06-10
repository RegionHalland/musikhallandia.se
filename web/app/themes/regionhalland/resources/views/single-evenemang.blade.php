@extends('layouts.app')

@section('content')

    @include('partials.hero')

    <div class="rh-xpad-A pt3 pb3" style="background: #FBF9F4">
        <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
            <main>
                <div class="clearfix">
                    <div class="col col-12 md-col-9 rh-article">
                        @while(have_posts()) @php(the_post())
                            <h1>{{ $post->post_title }}</h1>

                            <strong>
                                {{ get_region_halland_acf_page_evenemang_ingress() }}
                            </strong>

                            <p>
                                {{ the_content() }}
                            </p>
                        @endwhile
                    </div>
                    <div class="rh-xpad--left col col-12 md-col-3" >
                        <div class="p2 " style="background: #EFE7DA;">
                            <div class="pb3 mt2" style="border-bottom: 1px solid black;">
                                <h2>Information</h2><br>
                                <p>
                                    <strong>Var:</strong> {{ get_region_halland_acf_page_evenemang_spelstalle() }}, {{ get_region_halland_acf_page_evenemang_stad() }}
                                </p>
                                <p>
                                    <strong>När:</strong> {{ get_region_halland_acf_page_evenemang_speltid() }}
                                </p>
                                <p>
                                    <strong>Länkar:</strong>

                                @php($myInformation = get_region_halland_acf_page_evenemang_information())
                                @foreach ($myInformation as $information)
                                    @if($information['has_link'])
                                        <a href="{{ $information['link_url'] }}" target="{{ $information['link_target'] }}">{{ $information['link_title'] }}</a><br>
                                    @endif
                                @endforeach
                                </p>
                            </div>
                            <div class="pb3 mt3 mb3" style="border-bottom: 1px solid black;">
                                <h2>Arrangörer</h2>
                                <p>
                                @php($myArrangor = get_region_halland_acf_page_evenemang_arrangor())
                                @foreach ($myArrangor as $arrangor)
                                    @if($arrangor['has_link'])
                                        <a href="{{ $arrangor['link_url'] }}" target="{{ $arrangor['link_target'] }}">{{ $arrangor['link_title'] }}</a><br>
                                    @endif
                                @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>



        </div>

    </div>
    @include('partials.newsletter')
@endsection
