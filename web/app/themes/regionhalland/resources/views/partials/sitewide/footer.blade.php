<footer id="footer-top-placeholder" style="background-color: #EFE7DA; line-height: 1.4;">
    <div class="clearfix center px3 pb3" style="max-width: 1440px;">
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



<script src="{!! env('WP_HOME') !!}/include/scripts/jquery.3.3.1.min.js?ver=3.3.1"></script>
<script>
    // **************************************
    // *** Javascript set cookie function ***
    // **************************************
    function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }


    // ****************************
    // *** Cookie notice accept ***
    // ****************************
    $("#cookie-consent").on( "click", function() {
        // set cookie with vanilla javascript function
        setCookie('cookie_notice_accepted','1',365);
        // Hide div with cookie notice text + button
        $(".rh-cookie").hide();
    });
</script>


