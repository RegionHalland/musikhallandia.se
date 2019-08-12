
{{-- <div class="center px3 rh-article" style="background: #FBF9F4; max-width: 1440px;"> --}}
<div class="center rh-article" style="background: #FBF9F4; max-width: 1440px;">
    {{-- Kommenterat bort nedan knappar sålänge --}}
    {{--
    <div class="mx-auto py3" style="text-align: center">
        <span class="rh-pillbutton rh-pillbutton--grey mr2" style="height: 3em; padding-left:1em; padding-right: 1em; border-radius: 3em;">Aktuella evenemang</span>
        <a href="./?all=1" class="rh-pillbutton rh-pillbutton--pink" style="height: 3em; padding-left:1em; padding-right: 1em; border-radius: 3em;">Alla evenemang</a>
    </div>
    --}}

    <div style="width:100%; text-align: center;"><h1>Aktuella evenemang</h1></div>

    @include('partials.content.event-card')
</div>