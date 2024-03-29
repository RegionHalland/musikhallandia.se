<span class="hidden-sm">
    <div aria-label="Sidhuvud" class="flex items-center justify-between mx-auto" style="max-width: 1440px; background: #EFE7DA;">
        <a href="{!! env('WP_HOME') !!}"><img style="" alt="Länk till förstasidan" src="{!! env('WP_HOME') !!}/include/img/MH_Greyscale.png" /></a>
        <ul class="" aria-label="Huvudnavigation" style="display: inline;">
            @php($first_level_pages = get_region_halland_tree_first_level())
            @foreach($first_level_pages as $index => $page)
                <li class="mx1" style="display:inline;">
                @if($page->is_active === 1)
                    <a class="py1 rh-link--navigation" href="{{ $page->url }}" style="white-space: nowrap; border-bottom:4px solid #FA3CB4;">{{ $page->post_title }}</a>
                @else
                    <a class="rh-link--navigation" href="{{ $page->url }}" style="white-space: nowrap">{{ $page->post_title }}</a>
                @endif
                </li>
            @endforeach
        </ul>
    </div>
</span>
@include('partials.navigation.nav-mobile')