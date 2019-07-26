@php($myNyhet = get_region_halland_get_page_news_simple_single($nid))
@if($myNyhet)
    <div class="mx-auto" style="max-width:1440px; min-height: 400px; max-height: 420px; background-image: url('{{ get_the_post_thumbnail_url($nid) }}');  height: 50%; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    </div>
        <div class="rh-xpad-A pt3 pb1 mx-auto" style="max-width: 1440px; background: #FBF9F4">
            <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
                <div class="">
                    <a href="for-press/" class="rh-round-button rh-round-button--small icon-arrow-left"></a>
                    <strong>
                        <a href="./" class="h3 rh-link--navigation" style="line-height: 1.4;">
                            För press
                        </a>
                    </strong>
                </div>
            </div>
        </div>
        <div class="rh-xpad-A pt2 pb1 mx-auto" style="max-width: 1440px; background: #FBF9F4">
            <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
                <div class="clearfix">

                    <div class="col col-12 md-col-9 rh-article">
                        
                        <h1>{{ $myNyhet->post_title }}</h1>

                        <strong>{{ $myNyhet->description }}</strong>

                        <p>{!! do_shortcode(wpautop($myNyhet->post_content)) !!}</p>
                        
                    </div>

                </div>
            </div>
            <br><br>
        </div>

@endif