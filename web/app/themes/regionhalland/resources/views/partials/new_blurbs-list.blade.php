@php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
@if($myBlurbs)
    <div class="mx-auto pt2 pb2" style="background: #F8F6F4; max-width: 1440px;">
        <ul class="clearfix center pb3 pt3">
        @foreach ($myBlurbs as $blurbs)
            <li class="left-align col col-12 sm-col-6 md-col-6 lg-col-4" >
                <div class="rh-blurb mx1 my2" style="border-bottom: 4px solid #E99579; background-color: white;">
                    <div style="height: 200px; overflow:hidden;position:relative">
                        <img src="{!! $blurbs['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                    </div>
                    <div class="mx2 pt2 rh-blurb__description" >
                        <h3><a href="{{ $blurbs['link_url'] }}" target="{{ $blurbs['link_target'] }}"  class="rh-link--navigation"0>{{ $blurbs['link_title'] }}</a></h3>
                        <p>{{ $blurbs['post_content'] }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    </div>
@endif