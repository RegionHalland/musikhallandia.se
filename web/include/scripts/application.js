$(function() {
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
});

/* Mobile dropdown menu */
$(document).ready(function () {
    // Menu's element definitions
    var $menuDropDownAnchorId = $("#menu-dropdown-anchor"),
        $menuSpacingAfter = $(".rh-menu-dropdown__spacing-after"),
        $menuDropDown = $(".rh-menu-dropdown"),
        $menuDropDownHeader = $(".rh-menu-dropdown__header"),
        $menuDropDownBody = $(".rh-menu-dropdown__body"),
        $menuDropDownSubContainers = $(".rh-menu-dropdown__item__sub-container"),
        $menuSubItemIcons = $(".rh-menu-dropdown__icon-item");

    // Initial state for the menu when JS is activated in web browser
    $menuDropDownBody.addClass("rh-display--none");
    $menuDropDownSubContainers.addClass("rh-display--none");
    $menuSubItemIcons.toggleClass("icon-minus icon-plus");

    // EventListener for the menu
    var menuLastPosition = 0;
    var isMenuActive = true; // false: hide - true: show - Using for a better performance
    $(window).scroll(function () {
        // Determine the menu's type (fixed or relative)
        var menuPosInfo = getElementTopById($menuDropDownAnchorId);

        if (menuPosInfo.isOverViewport) {
            changeToFixedPosition(true);
        } else {
            changeToFixedPosition(false, function () {
                $menuDropDown.css({ "top": 0 });
                $("body").hasClass("rh-noscroll") && $("body").removeClass("rh-noscroll");
            });
        }

        // Minimize the menu when scrolling down/up for a better user experience
        var menuCurrentPosition = $(this).scrollTop();
        var menuSpacingAfterPosInfo = getElementTopById($menuSpacingAfter),
            menuSpacingAfterOffset = $menuSpacingAfter.height() * -1;

        if (menuCurrentPosition < menuLastPosition) {
            if (!isMenuActive) {
                $menuDropDownHeader.removeClass("rh-menu-dropdown__header--minimize");
                isMenuActive = !isMenuActive;
            }
        }
        else if (menuCurrentPosition > menuLastPosition) {
            if (isMenuActive &&
                menuPosInfo.isOverViewport &&
                menuSpacingAfterPosInfo.viewportTop <= menuSpacingAfterOffset) {

                $menuDropDownHeader.addClass("rh-menu-dropdown__header--minimize");
                isMenuActive = !isMenuActive;
            }
        }

        menuLastPosition = menuCurrentPosition;
    });

    // Main menu button
    $(".rh-menu-dropdown__menu-round-button").click(function () {
        $(this)
            .toggleClass("rh-menu-dropdown__menu-round-button--open")
            .find(".rh-menu-dropdown__icon-menu")
            .toggleClass("icon-x icon-menu");

        $menuDropDown.toggleClass("rh-menu-dropdown--open");
        $menuDropDownBody.toggleClass("rh-display--none rh-display--show");

        /* Enhanced */
        var menuCurrentPosInfo = getElementTopById($menuDropDownAnchorId);
        if ($menuDropDownBody.is(":visible")) { // Menu is opened
            if (menuCurrentPosInfo.isOverViewport) {
                lockBodyScrolling(true, makeMarginOffset(true));
            } else { // Menu is on top
                //-> Change position from "relative" to "fixed" by add fixed-class
                var topPos = menuCurrentPosInfo.bodyTop ?
                    menuCurrentPosInfo.viewportTop : // Offset for above elements
                    menuCurrentPosInfo.onTop;

                changeToFixedPosition(true, function () {
                    $menuDropDown.css({ "top": topPos });
                    lockBodyScrolling(true, makeMarginOffset(true));
                });
            }

        } else { // Menu is closed - Reset all to default
            if (menuCurrentPosInfo.isOverViewport) {
                lockBodyScrolling(false, makeMarginOffset(false));
            } else { // Menu is on top
                //-> Change back position from "fixed" to "relative" by remove fixed-class
                changeToFixedPosition(false, function () {
                    $menuDropDown.css({ "top": 0 });
                    lockBodyScrolling(false, makeMarginOffset(false));
                });
            }
        }
    });

    // Item button
    $(".rh-menu-dropdown__item-round-button").click(function () {
        var $menuItemButton = $(this),
            $menuItemSubContainer = $("#sub" + $menuItemButton.attr('id')); // Menu item's sub container ID

        $menuItemButton
            .toggleClass("rh-menu-dropdown__item-round-button--open")
            .find(".rh-menu-dropdown__icon-item")
            .toggleClass("icon-minus icon-plus");

        $menuItemSubContainer.toggleClass("rh-display--none rh-display--show");
    });

    // Item link
    $(".rh-menu-dropdown__body a").click(function () {
        var menuItemClassName = "rh-menu-dropdown__item";

        // Reset all and only the latest clicked item is activated
        $(".rh-menu-dropdown__item--active").removeClass("rh-menu-dropdown__item--active");
        $(this)
            .closest("div[class^='" + menuItemClassName + "']")
            .addClass("rh-menu-dropdown__item--active");
    });

    /* Common functions */
    function changeToFixedPosition(status, fnCallback) {
        if (status) {
            $menuDropDown.addClass("rh-position-fixed");
            $menuSpacingAfter.addClass("rh-menu-dropdown__spacing-after--active");
        } else {
            $menuDropDown.removeClass("rh-position-fixed");
            $menuSpacingAfter.removeClass("rh-menu-dropdown__spacing-after--active");
        }

        typeof fnCallback === 'function' && fnCallback();
    }

    function lockBodyScrolling(status, fnCallback) {
        // bodyScrollLock exported from the library Body scroll block (//github.com/willmcpo/body-scroll-lock)
        var disableBodyScroll = bodyScrollLock.disableBodyScroll;
        var clearAllBodyScrollLocks = bodyScrollLock.clearAllBodyScrollLocks;
        
        if (status) {
            var targetElement = document.querySelector(".rh-menu-dropdown");
            
            $("body").addClass("rh-noscroll");
            disableBodyScroll(targetElement);
        } else {
            $("body").removeClass("rh-noscroll");
            clearAllBodyScrollLocks();
        }

        typeof fnCallback === 'function' && fnCallback();
    }

    function makeMarginOffset(status) {
        var scrollbarWidth = calculateScrollbarWidth();

        if (status) {
            $("body").css({ "margin-right": scrollbarWidth });
        } else {
            $("body").css({ "margin-right": 0 }); // Reset to default
        }
    }

    /* Helpers */
    function getElementTopById($elementId) {
        if (!$elementId) {
            throw new Error("$element ID is missing");
        }

        var bodyTop = $(window).scrollTop(),
            elementTop = $elementId.position().top,
            viewportTop = elementTop - bodyTop,
            isOverViewportTop = bodyTop >= elementTop;

        return {
            bodyTop: bodyTop,
            onTop: elementTop,
            viewportTop: viewportTop,
            isOverViewport: isOverViewportTop
        };
    }

    function calculateScrollbarWidth() {
        return (window.innerWidth - $(document).width());
    }
});