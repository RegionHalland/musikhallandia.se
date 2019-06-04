<footer class="rh-footer-logo mx-auto mt1" id="footer-top-placeholder" style="max-width: 1440px;">

    <div class="rh-footer-logo-div">
        <a href="https://www.regionhalland.se"><img class="rh-footer-logo-item" src="{!! env('WP_HOME') !!}/styleguide5.0.0/images/components/kommuner_logo/RegionHalland.png" alt="RegionHalland Logo"></a>
    </div>
    <div class="rh-footer-logo-div">
        <a href="https://kommun.falkenberg.se/"><img class="rh-footer-logo-item" src="{!! env('WP_HOME') !!}/styleguide5.0.0/images/components/kommuner_logo/Falkenberg.png" alt="Falkenberg Logo"></a>
    </div>
    <div class="rh-footer-logo-div">
        <a href="https://www.halmstad.se/"><img class="rh-footer-logo-item" src="{!! env('WP_HOME') !!}/styleguide5.0.0/images/components/kommuner_logo/Halmstad.png" alt="Halmstad Logo"></a>
    </div>
    <div class="rh-footer-logo-div">
        <a href="http://hylte.se/"><img class="rh-footer-logo-item" src="{!! env('WP_HOME') !!}/styleguide5.0.0/images/components/kommuner_logo/Hylte.png" alt="Hylte Logo"></a>
    </div>
    <div class="rh-footer-logo-div">
        <a href="https://www.laholm.se/"><img class="rh-footer-logo-item" src="{!! env('WP_HOME') !!}/styleguide5.0.0/images/components/kommuner_logo/Laholm.png" alt="Laholm Logo"></a>
    </div>
    <div class="rh-footer-logo-div">
        <a href="https://varberg.se/"><img class="rh-footer-logo-item" src="{!! env('WP_HOME') !!}/styleguide5.0.0/images/components/kommuner_logo/Varberg.png" alt="Varberg Logo"></a>
    </div>

</footer>

<script src="{!! env('WP_HOME') !!}/include/scripts/jquery.3.3.1.min.js?ver=3.3.1"></script>

<script src="{!! env('WP_HOME') !!}/styleguide5.0.0/js/components.js"></script>

<script>
    function debounce(delay, fn) {
        var timer = null;
        return function () {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(context, args);
            }, delay);
        };
    }

    $('a[href^="#"]').on( "click", function() {
        var target = $(this.hash);
        if (target.length) {

            // Animate target
            $('html,body').animate({scrollTop: target.offset().top}, 800);

            // Add class for highlight the text
            $(target).addClass("content-highlight");

            // Wait 2s and then remove the highlight class
            setTimeout(function(){
                $(target).removeClass("content-highlight");
            }, 2000);

            return false;
        }
    });

    if ($("body.page-template-default")[0]){
        $(window).scroll(debounce(250, function() {

            var myPosition = Math.round($('#content-nav-placeholder').offset().top - $(window).scrollTop());
            var myFooterTop = Math.round($('#footer-top-placeholder').offset().top - $(window).scrollTop());
            var myContentNavBottom = Math.round($('#content-nav-bottom-placeholder').offset().top - $(window).scrollTop());
            if (myPosition < 30) {
                if (myFooterTop < myContentNavBottom + 40) {
                    $(".content-nav__item").addClass("content-nav__item--tight");
                } else {
                    $("#content-nav-container").addClass("rh-get-fixed-sticky");
                    $(".content-nav__item--tight").removeClass("content-nav__item--tight");
                }
            } else {
                $("#content-nav-container").removeClass("rh-get-fixed-sticky");
                $(".content-nav__item--tight").removeClass("content-nav__item--tight");

            }
        }));
    }

    $(".rh-header-button--search").on( "click", function() {
        $(".rh-header-search-desktop").show();
        $(".rh-header-button--search").hide();
    });

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
<script type="text/javascript">var _baTheme=0, _baMode='Aktivera Talande Webb', _baUseCookies=true, _baHideOnLoad=true;</script>

<!-- How it looked before -->
<!-- <script type="text/javascript" src="//www.browsealoud.com/plus/scripts/ba.js"></script> -->
<script type="text/javascript" src="{!! env('WP_HOME') !!}/include/aloud/ba.js"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-1181886-12');
</script>
