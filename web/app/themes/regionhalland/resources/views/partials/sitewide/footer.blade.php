<div class="mx-auto clearfix center px3 pb3 pt2" style="background-color: #EFE7DA; line-height: 1.4; max-width: 1440px;">
    @if(1==2)
    @if(function_exists('get_region_halland_theme_links'))
        @php($myData = get_region_halland_theme_links())
        @if(!empty($myData['link_1']) and !empty($myData['text_1']))
            <div class="col col-12 md-col-6">
                <div class="m2 p2" style="position: relative; text-align:center; line-height: 7em; background:black;height:9em;">
                    <div style="line-height:1; color: white; position: absolute; top:1em; left:1em;">Vi söker</div>
                    <a class="h1" href="{!! $myData['link_1'] !!}" style="color:white;" aria-label="Vi söker {!! $myData['text_1'] !!}">{!! $myData['text_1'] !!}</a>
                    <span style="width:0; height: 0; position: absolute; bottom: 0; right: 0; border-right: 30px solid #FA3CB4; border-top: 80px solid transparent;"></span>
                </div>
            </div>
        @else
            <div class="col col-12 md-col-6">
                <div class="m2 p2" style="position: relative; line-height:7em; height:9em;">
                </div>
            </div>
        @endif
        @if(!empty($myData['link_2']) and !empty($myData['text_2']))
            <div class="col col-12 md-col-6">
                <div class="m2 p2" style="position: relative; background:black; line-height:7em; text-align:center; height:9em;">
                    <div style="line-height:1; color: white; position: absolute; top:1em; left:1em;">Vi söker</div>
                    <a class="h1" href="{!! $myData['link_2'] !!}" style="color:white" aria-label="Vi söker {!! $myData['text_2'] !!}">{!! $myData['text_2'] !!}</a>
                    <span style="width:0; height: 0; position: absolute; bottom: 0; right: 0; border-right: 30px solid #FA3CB4; border-top: 80px solid transparent;"></span>
                </div>
            </div>
        @else
            <div class="col col-12 md-col-6">
                <div class="m2 p2" style="position: relative; line-height:7em; height:9em;">
                </div>
            </div>
        @endif
    @endif
    @endif
    <div class="left-align col col-12 sm-col-12 md-col-4">
        <img style="max-width: 100%;" alt="" src="{!! env('WP_HOME') !!}/include/img/MH_Greyscale.png" />
        <p style="max-width:15em;">
            Musik Hallandia är en musikinstitution, helägd av Region Halland.
        </p>
        <p>
            <a class="rh-link--navigation" href="https://www.facebook.com/musikhallandia">Facebook</a>
        </p>
        <p>
            <a class="rh-link--navigation" href="https://www.instagram.com/musikhallandia/">Instagram (@musikhallandia)</a>
        </p>
        <p class="pt2 pl1">
            <img style="max-width: 100%;" alt="" src="{!! env('WP_HOME') !!}/include/img/Huvudlogotyp-med-devis-svart.png" />
        </p>
    </div>

    <div class="left-align col col-12 sm-col-4 md-col-2">
        <p class="h2 pt3">Sidor</p>
        @php($first_level_pages = get_region_halland_tree_first_level())
        @if(isset($first_level_pages) && !empty($first_level_pages))
            <ul aria-label="Sidor i huvudnavigationen">
                @foreach($first_level_pages as $first_level_page)
                    @if($first_level_page->active === true)
                        <li style="position:relative;">
                            <a class="active rh-link--navigation" href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a>
                            <span class="ml1 icon-arrow-right" style="font-family: feather !important;position:absolute; left:7em;"></span>
                        </li>
                    @else
                        <li style="position:relative;">
                            <a class="rh-link--navigation" href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a>
                            <span class="ml1 icon-arrow-right" style="font-family: feather !important;position:absolute; left: 7em;"></span>
                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
    </div>
    <div class="left-align col col-12 sm-col-4 md-col-3">
        <p class="h2 pt3">
            Kontakt
        </p>
        <p>
            <strong>Telefon:</strong> 035 - 13 48 00<br>
            <strong>Fax:</strong> 035 - 13 54 44<br>
            <strong>Epost:</strong> <a href="mailto:info@musikhallandia.se" class="rh-link--navigation">info@musikhallandia.se</a>
        </p>
        <p>
            <a class="rh-link--navigation" href="{!! env('WP_HOME') !!}/om-oss/kontakt/">Kontakta personalen</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;"></span>
        </p>
  </div>

    <div class="left-align col col-12 sm-col-4 md-col-3">
        <p class="h2 pt3">
            Adress
        </p>
        <p>
            <strong>Besöksadress:</strong><br>
            Kultur i Halland<br>
            Kronobränneriet<br>
            Skonertgatan 12A, Halmstad
        </p>
        <p>
            <strong>Postadress:</strong><br>
            Region Halland<br>
            Kultur i Halland<br>
            Box 517, 301 80 Halmstad<br>
        </p>
    </div>
</div>