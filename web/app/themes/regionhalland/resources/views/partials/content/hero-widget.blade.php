@php($myData = get_region_halland_acf_page_evenemang_kommande_items(1))
@if(isset($myData))
    <div class="mx-auto" style="min-height: 600px; max-height: 600px; max-width:1440px; background-image: url('{!! $myData[0]->image_url !!}'); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
        <div class="center pb3 pt2 pr3" style="padding-left: 50px; position: absolute; bottom: 1.5em; left: 2.5em; color: white; background: black; z-index: 2; max-width: 1440px;">
            @if(isset($myData[0]->post_title))
                <span class="h1" style="color:white;"><a href="{{ $myData[0]->url }}" class=" rh-link--navigation" style="color:white;">{{ $myData[0]->post_title }}</a></span><br>
            @endif
                <span class="h3" style="font-weight: normal; color:white;">
                    @if(isset($myData[0]->spelstalle))
                        {{ $myData[0]->spelstalle }},
                    @endif
                    @if(isset($myData[0]->stad))
                        {{ $myData[0]->stad }}
                    @endif
                    @if(isset($myData[0]->speltid_datum))
                        {{ $myData[0]->speltid_datum }}
                    @endif
                </span>

                <span style="width:48px; position: absolute; top:40px; left: -24px; border-bottom:3px solid white;"></span>
                <span style="width:48px; position: absolute; top:48px; left: -24px; border-bottom:3px solid white;"></span>
                <span style="width:48px; position: absolute; top:56px; left: -24px; border-bottom:3px solid white;"></span>
                <span style="width:48px; position: absolute; top:64px; left: -24px; border-bottom:3px solid white;"></span>
                <span style="width:48px; position: absolute; top:72px; left: -24px; border-bottom:3px solid white;"></span>
        </div>
        <span style="width:0; height: 0; position: absolute; bottom: 0; left: 0;  border-left: 130px solid #FA3CB4; border-top: 230px solid transparent;"></span>
        <span style="width:0; height: 0; position: absolute; top: 0; right: 0; border-right: 150px solid #FCF800; border-bottom: 320px solid transparent;"></span>
    </div>
@endif