
<div class="center px3 rh-article" style="background: #FBF9F4; max-width: 1440px;">
    <main id="main">
        <div class="mx-auto py3" style="text-align: center">
            <span class="rh-pillbutton rh-pillbutton--pink mr2" style="height: 3em; padding-left:1em; padding-right: 1em; border-radius: 3em;">Aktuella evenemang</span>
            <a href="./?all=1" class="rh-pillbutton rh-pillbutton--grey" style="height: 3em; padding-left:1em; padding-right: 1em; border-radius: 3em;">Alla evenemang</a>
        </div>
        <div style="width:100%; text-align: center;"><h1>Aktuella evenemang</h1></div>
        @php($myData = get_region_halland_acf_page_evenemang_kommande_items(2))
        @if(isset($myData[0]))
            @include('partials.content.event-card')
        @else
            <div class="pb2" style="text-align: center;">Just nu har vi inga aktuella evenemang.</div>
        @endif
    </main>
</div>