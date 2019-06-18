@php($myData = get_region_halland_acf_page_evenemang_kommande_items())
@if(get_the_post_thumbnail_url())
    <div style="min-height: 400px; max-height: 500px; background-image: url('{!! $myData[0]->image_url !!}');  height: 50%; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
        <div class="center rh-caption-hero" style="z-index: 2; max-width: 1440px;">
            {{ $myData[0] -> post_title }}
            <p class="h3" style="font-weight: normal; color:white;">{{ $myData[0] -> spelstalle }}, {{ $myData[0] -> stad }} {{ $myData[0] -> date }}</p>

                <span style="width:48px; position: absolute; top:40px; left: -24px; border-bottom:3px solid white;"></span>
                <span style="width:48px; position: absolute; top:48px; left: -24px; border-bottom:3px solid white;"></span>
                <span style="width:48px; position: absolute; top:56px; left: -24px; border-bottom:3px solid white;"></span>
                <span style="width:48px; position: absolute; top:64px; left: -24px; border-bottom:3px solid white;"></span>
                <span style="width:48px; position: absolute; top:72px; left: -24px; border-bottom:3px solid white;"></span>


        </div>
        <span style="width:0; height: 0; position: absolute; bottom: 0; left: 0;  border-left: 100px solid #FA3CB4; border-top: 200px solid transparent;"></span>
        <span style="width:0; height: 0; position: absolute; top: 0; right: 0; border-right: 150px solid #FCF800; border-bottom: 320px solid transparent;"></span>

    </div>
@endif