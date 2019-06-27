{{--

    Template Name: Kontakt

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

                    {{-- Kontaktkorten från nya pluginet --}}
                    @php($myData = get_region_halland_acf_main_post_page_contact_cards())
                    @if(isset($myData))
                        <div>
                            <ul style="display:inline-block">
                            @foreach ($myData as $data)
                                <li class="pb4" style="display:inline-block">
                                    @if($data['contact_has_image'])
                                        <div class="mr3" style="text-align:center; overflow: hidden; position: relative; width:400px; height:300px; ">
                                            <img src="{{ $data['contact_image_url'] }}" style="width:400px; height:300px;">
                                            {{-- Decorative triangles --}}
                                            <span style="width:0; height: 0; position: absolute; bottom: 0; left: 0; border-left: 30px solid #FA3CB4; border-top: 80px solid transparent;"></span>
                                            <span style="width:0; height: 0; position: absolute; top: 0; right: 0; border-right: 30px solid #FA3CB4; border-bottom: 80px solid transparent;"></span>
                                        </div>
                                    @endif
                                    <h2>
                                        {!! $data['contact_name'] !!}
                                    </h2>
                                    {!! $data['post_content'] !!}
                                    <p>
                                        {{ $data['contact_epost'] }}
                                    </p>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Kontaktkorten --}}
                    {{--
                    @php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
                    @if(isset($myBlurbs))
                        <div class="col col-12">
                            <ul>
                                @foreach ($myBlurbs as $blurbs)
                                    <li class="col col-12 sm-col-12 md-col-6 lg-col-4 pb4">
                                        <div class="clearfix">
                                            <div class="mr3" style="">
                                                {!! $blurbs['image'] !!}
                                            </div>
                                            <h2>{{ $blurbs['post_title'] }}</h2>
                                            {!! $blurbs['post_content'] !!}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    --}}

                </div>
            </div>
        </div>
    </main>
    @include('partials.content.newsletter')
@endsection
