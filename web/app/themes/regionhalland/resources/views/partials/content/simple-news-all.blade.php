@include('partials.content.content')
        
@php($myNews = get_region_halland_get_page_news_simple())
@if($myNews)
    <div class="rh-xpad-A pt2 mx-auto" style="max-width: 1440px;background: #EFE7DA;">
        <div class="rh-xpad-B">
            <h2>Nyheter</h2>
        </div>
    </div>
    <ul>
        @foreach ($myNews as $nyhet)
            <li class="rh-xpad-A py3 mx-auto rh-hallandia-newslist--newsitem" style="max-width: 1440px;">
                <div class="rh-xpad-B">
                    <div class="clearfix">

                        @if($nyhet->image_url)
                            <img class="mr2" src="{{$nyhet->image_url}}" alt="@if($nyhet->image_alt){{$nyhet->image_alt}}@else INGEN ALTTEXT @endif" style="width:300px;height:200px; float:left;">
                        @endif

                        <h3 class="h2"><a class="rh-link--navigation" href="./?nid={{$nyhet->ID}}">{{$nyhet->post_title}}</a></h3>
                        <p>{{str_limit($nyhet->post_date, $limit = 11, $end = '')}}</p>

                        <p>{{$nyhet->description}}</p>

                        @if($nyhet->link_url && $nyhet->link_title)
                            <a href="{{$nyhet->link_url}}" @if($nyhet->link_target)target="{{$nyhet->link_target}}"@endif>{{$nyhet->link_title}}</a>
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endif