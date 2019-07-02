<footer class="mx-auto" id="footer-top-placeholder" style="max-width:1440px; background-color: #EFE7DA; line-height: 1.4;">
    <div class="clearfix center px3 pb3 pt2" style="max-width: 1440px;">
        @if(function_exists('get_region_halland_theme_links'))
            @php($myData = get_region_halland_theme_links())
            <div class="col col-12 md-col-6">
                <div class="m2 p2" style="position: relative; text-align:center; line-height: 7em; background:black;height:9em;">
                    <div style="line-height:1; color: white; position: absolute; top:1em; left:1em;">Vi söker</div>
                    <a class="h2" href="{!! $myData['link_1'] !!}" style="color:white;">{!! $myData['text_1'] !!}</a>
                    <span style="width:0; height: 0; position: absolute; bottom: 0; right: 0; border-right: 30px solid #FA3CB4; border-top: 80px solid transparent;"></span>
                </div>
            </div>
            <div class="col col-12 md-col-6">
                <div class="m2 p2" style="position: relative; background:black; line-height:7em; text-align:center; height:9em;">
                    <div style="line-height:1; color: white; position: absolute; top:1em; left:1em;">Vi söker</div>
                    <a class="h2" href="{!! $myData['link_2'] !!}" style="color:white">{!! $myData['text_2'] !!}</a>
                    <span style="width:0; height: 0; position: absolute; bottom: 0; right: 0; border-right: 30px solid #FA3CB4; border-top: 80px solid transparent;"></span>
                </div>
            </div>
        @endif
        <div class="left-align col col-12 sm-col-12 md-col-4">
            <img style="max-width: 100%;" src="{!! env('WP_HOME') !!}/include/img/MH_Greyscale.png" />
            <p style="max-width:15em;">
                Musik Hallandia är en musikinstitution, helägd av Region Halland.
            </p>
            <p>
                <a class="rh-link--navigation" href="">Facebook</a>
            </p>
            <p>
                <a class="rh-link--navigation" href="">Instagram</a>
            </p>
            <p>
                <a class="rh-link--navigation" href="">E-post</a>
            </p>

        </div>

        <div class="left-align col col-12 sm-col-4 md-col-2">
            <p class="h2 pt3">Sidor</p>
            @php($first_level_pages = get_region_halland_tree_first_level())
            @if(isset($first_level_pages) && !empty($first_level_pages))
                <ul>
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
            <p class="h2 pt3">Om oss</p>
            <ul>
                <li style="position:relative;"><a class="rh-link--navigation" href="/om-oss">Om oss</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;position:absolute; left:7em; "></span></li>
                <li style="position:relative;"><a class="rh-link--navigation" href="/">Vår vision</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;position:absolute; left:7em;"></span></li>
                <li style="position:relative;"><a class="rh-link--navigation" href="/">Vårt uppdrag</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;position:absolute; left:7em;"></span></li>
                <li style="position:relative;"><a class="rh-link--navigation" href="/">Lediga jobb</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;position:absolute; left:7em;"></span></li>
                <li style="position:relative;"><a class="rh-link--navigation" href="/">Kontakt</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;position:absolute; left:7em;"></span></li>
                <li style="position:relative;"><a class="rh-link--navigation" href="/">Press & Media</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;position:absolute; left:7em;"></span></li>
            </ul>
        </div>

        <div class="left-align col col-12 sm-col-4 md-col-3">
            <p class="h2 pt3">
                Kontakt
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
            <p>
                <strong>Telefon:</strong> 035 - 13 48 00<br>
                <strong>Fax:</strong> 035 - 13 54 44
            </p>
            <p>
                <a class="rh-link--navigation" href="">Kontakta personalen</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;"></span>
            </p>

        </div>
    </div>
</footer>