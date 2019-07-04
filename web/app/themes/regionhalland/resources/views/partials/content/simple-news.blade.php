<div class="rh-xpad-A pt3 pb3 mx-auto" style="max-width: 1440px; background: #FBF9F4">
    <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
        <div class="clearfix">
            @php($myNews = get_region_halland_get_page_news_simple())
			@if($myNews)
			  @foreach ($myNews as $nyhet)
			    <h3>{{ $nyhet->post_title }}</h3>
			    <p>{{ $nyhet->description }}</p>
			    <p>{!! wpautop($nyhet->post_content) !!}</p>
			    <a href="{{ $nyhet->link_url }}" target="{{ $nyhet->link_target }}">{{ $nyhet->link_title }}</a><br><br>
			  @endforeach
			@endif
        </div>
    </div>
</div>