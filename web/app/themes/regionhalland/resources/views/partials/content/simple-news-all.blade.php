@include('partials.content.content')
        
@php($myNews = get_region_halland_get_page_news_simple())
@if($myNews)
    <ul>
        @foreach ($myNews as $nyhet)
            <li class="rh-xpad-A py3 mx-auto rh-hallandia-newslist--newsitem" style="max-width: 1440px;">
                <div class="rh-xpad-B">
                    <div class="clearfix">

                        @if($nyhet->image_url)
                            <img class="mr2" src="{{$nyhet->image_url}}" style="width:300px;height:200px; float:left;">
                        @endif

                        <h3 class="h2"><a class="rh-link--navigation" href="./?nid={{$nyhet->ID}}">{{$nyhet->post_title}}</a></h3>
                        <p>{{str_limit($nyhet->post_date, $limit = 11, $end = '')}}</p>

                        <p>{{$nyhet->description}}</p>

                        <a href="{{$nyhet->link_url}}" target="{{$nyhet->link_target}}">{{$nyhet->link_title}}</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endif