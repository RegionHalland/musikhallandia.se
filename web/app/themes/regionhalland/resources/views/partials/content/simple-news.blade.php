<div class="rh-xpad-A pt2 mx-auto" style="max-width: 1440px; background: #EFE7DA;">
    <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
        <div class="clearfix">
            <h2>Nyheter</h2>
        </div>
    </div>
</div>

@php($myNews = get_region_halland_get_page_news_simple())
@if($myNews)
    <ul>
        @foreach ($myNews as $nyhet)
            <div class="rh-xpad-A py3 mx-auto rh-hallandia-newslist--newsitem" style="max-width: 1440px;">
                <div class="rh-xpad-B">
                    <li class="">
                        <div class="clearfix">

                            @if($nyhet->image_url)
                                <img class="mr2" src="{{ $nyhet->image_url }}" style="width:300px;height:200px; float:left;">
                            @endif

                            <h3 class="h2"><a class="rh-link--navigation" href="{{ $nyhet->url }}">{{ $nyhet->post_title }}</a></h3>
                            <p>{{ str_limit($nyhet->post_date, $limit = 11, $end = '') }}</p>
                            <p>{!! wpautop($nyhet->post_content) !!}</p>
                            <a href="{{ $nyhet->link_url }}" target="{{ $nyhet->link_target }}">{{ $nyhet->link_title }}</a><br><br>
                        </div>
                    </li>
                </div>
            </div>
        @endforeach
    </ul>
@endif
