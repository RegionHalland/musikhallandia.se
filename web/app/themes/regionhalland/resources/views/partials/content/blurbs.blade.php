{{-- Blurbs på nedre delen av sidan --}}
@php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
@if($myBlurbs)
    <div class="rh-xpad-A pt3 pb3 mx-auto" style="max-width:1440px; background: #EFE7DA;">
        <div class="rh-xpad-B">
            <ul>
                @foreach ($myBlurbs as $blurbs)
                    <li class="pb4">
                        <div class="clearfix">
                            <div class="mr3" style="float:left;">
                                {!! $blurbs['image'] !!}
                            </div>
                            <h2>{{ $blurbs['post_title'] }}</h2>
                            {{ $blurbs['post_content'] }}

                            @if($blurbs['link_url'])
                                <p><br><a href="{{ $blurbs['link_url'] }}">{!! $blurbs['link_title'] !!}</a></p>
                            @endif

                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif