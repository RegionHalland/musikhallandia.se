


<div class="center px3 rh-article" style="background: #FBF9F4; max-width: 1440px;">
    <main id="main">
        <div style="width:100%; text-align: center;"><h1>Alla evenemang</h1></div>
        @php($myData = get_region_halland_acf_page_evenemang_kommande_items())
        @if(isset($myData[0]))
            @include('partials.content.event-card')
        @else
            <div class="pb2" style="text-align: center;">Inga evenemang har lagts in ännu.</div>
        @endif
    </main>
</div>