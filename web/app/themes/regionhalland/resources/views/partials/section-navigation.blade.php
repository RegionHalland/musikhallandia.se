<nav aria-label="Undersidor" class="mx-auto" style="max-width: 1440px;">
    <ul class="clearfix pt3" aria-label="Undersidor" style="background-color: white; border-radius: 0.4ex;">
        @php($page_children = get_region_halland_page_children())
        @foreach($page_children as $index => $page)
            <li class="rh-navigation-card col col-12 sm-col-6 md-col-4 lg-col-4 px3" style="position:relative">
                <div class="rh-navigation-card-title">
                    <a href="{{ $page->url }}" class="rh-round-button rh-round-button--small rh-round-button--vuxhalland icon-arrow-right"></a>
                    <strong><a href="{{ $page->url }}" class="h3 rh-link--navigation" style="line-height: 1.4;">
                        {{ $page->post_title }}
                    </a></strong>
                </div>
                <p class="rh-navigation-card-description" style="overflow:hidden; color:#575757;">
                    {{ get_region_halland_acf_page_menu_text($page->ID) }}
                </p>
            </li>
        @endforeach
    </ul>
</nav>