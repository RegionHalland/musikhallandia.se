<footer id="footer-top-placeholder" style="background-color: #EFE7DA; line-height: 1.4;">
    <div class="clearfix center px3 pb3" style="max-width: 1440px;">
        <div class="left-align col col-12 sm-col-12 md-col-4 lg-col-4">
            <img style="" src="{!! env('WP_HOME') !!}/include/img/MH_Greyscale.png" />
            <p style="max-width:15em;">
                Musik Hallandia är en musikinstitution, helägd av Region Halland.
            </p>
            <p>
                <a href="">Facebook</a>
            </p>
            <p>
                <a href="">Instagram</a>
            </p>
            <p>
                <a href="">E-post</a>
            </p>

        </div>

        <div class="left-align col col-12 sm-col-12 md-col-2 lg-col-2">
            <p class="h2 pt3">Sidor</p>
            @php($first_level_pages = get_region_halland_tree_first_level())
            @if(isset($first_level_pages) && !empty($first_level_pages))
                <ul>
                    @foreach($first_level_pages as $first_level_page)
                        @if($first_level_page->active === true)
                            <li>
                                <a class="active" href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="left-align col col-12 sm-col-12 md-col-3 lg-col-3">
            <p class="h2 pt3">Om oss</p>
            <ul>
                <li><a href="/om-oss">Om oss</a></li>
                <li><a href="/">Vår vision</a></li>
                <li><a href="/">Vårt uppdrag</a></li>
                <li><a href="/">Lediga jobb</a></li>
                <li><a href="/">Kontakt</a></li>
                <li><a href="/">Press & Media</a></li>
            </ul>
        </div>

        <div class="left-align col col-12 sm-col-12 md-col-3 lg-col-3">
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
                <a href="">Kontakta personalen</a>
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


