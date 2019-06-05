@extends('layouts.app')
@section('content')
    @include('partials.hero')
    @php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
    @if($myBlurbs)

        <ul class="clearfix center pb3 pt3" style="max-width:1440px;background: #F8F6F4;">
        <h1 class="ml2">Vilken utbildning passar dig?</h1>
            @if( isset($myBlurbs[0]) )
                <li class="left-align col col-12 sm-col-6 md-col-4 lg-col-4">
                    <div class="rh-blurb mx1 my2" style="border-bottom: 4px solid #E99579; background:white;">
                        <div style="height: 200px; overflow:hidden;position:relative">
                            <img src="{!! $myBlurbs[0]['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                        </div>
                        <div class="mx2 pt2 rh-blurb__description" >
                            <h3><a href="{{ $myBlurbs[0]['link_url'] }}" class="rh-link--navigation" target="{{ $myBlurbs[0]['link_target'] }}">{{ $myBlurbs[0]['link_title'] }}</a></h3>
                            <p>{{ $myBlurbs[0]['post_content'] }}</p>
                        </div>
                    </div>
                </li>
            @endif

            @if( isset($myBlurbs[1]) )
                <li class="left-align  col col-12 sm-col-6 md-col-4 lg-col-4">
                    <div class="rh-blurb mx1 my2" style="border-bottom: 4px solid #E99579; background: white; ">
                        <div style="height: 200px; overflow:hidden;position:relative">
                            <img src="{!! $myBlurbs[1]['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                        </div>
                        <div class="rh-blurb__description mx2 pt2" >
                            <h3><a href="{{ $myBlurbs[1]['link_url'] }}" class="rh-link--navigation" target="{{ $myBlurbs[1]['link_target'] }}">{{ $myBlurbs[1]['link_title'] }}</a></h3>
                            <p>{{ $myBlurbs[1]['post_content'] }}</p>
                        </div>
                    </div>
                </li>
            @endif

            @if( isset($myBlurbs[2]) )
                <li class="left-align  col col-12 sm-col-12 md-col-4 lg-col-4">
                    <div class="rh-blurb mx1 my2" style="border-bottom: 4px solid #E99579; background: white;">
                        <div style="height: 200px; overflow:hidden;position:relative">
                            <img src="{!! $myBlurbs[2]['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                        </div>
                        <div class="mx2 pt2 rh-blurb__description">
                            <h3><a href="{{ $myBlurbs[2]['link_url'] }}" class="rh-link--navigation" target="{{ $myBlurbs[2]['link_target'] }}">{{ $myBlurbs[2]['link_title'] }}</a></h3>
                            <p>{{ $myBlurbs[2]['post_content'] }}</p>
                        </div>
                    </div>
                </li>
            @endif
        </ul>

    @endif



@endsection


