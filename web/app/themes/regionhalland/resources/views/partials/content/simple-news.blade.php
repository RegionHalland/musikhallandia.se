<div class="rh-xpad-A pb3 pt1 mx-auto" style="max-width: 1440px; background: #EFE7DA;">
    <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
        <div class="clearfix">
            <h2>Nyheter</h2>
        </div>
    </div>
</div>

@php($myNews = get_region_halland_get_page_news_simple())
@if($myNews)
    <div class="rh-xpad-A pb3 pt1 mx-auto" style="max-width: 1440px; background: #EFE7DA;">
        <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
            <div class="clearfix">
                @foreach ($myNews as $nyhet)
                    <h3>{{ $nyhet->post_title }}</h3>
                    <p>{{ $nyhet->description }}</p>
                    <p>{!! wpautop($nyhet->post_content) !!}</p>
                    <a href="{{ $nyhet->link_url }}" target="{{ $nyhet->link_target }}">{{ $nyhet->link_title }}</a><br><br>
                @endforeach
            </div>
        </div>
    </div>
@endif
