<div style="background: #EFE7DA;">
    <nav aria-label="Sidhuvud" class="flex items-center justify-between mx-auto" style="max-width: 1440px; background: #EFE7DA;">
        <a href="{!! env('WP_HOME') !!}"><img style="" src="{!! env('WP_HOME') !!}/include/img/MH_Greyscale.png" /></a>
        <ul class="" style="display: inline;">
            @php($first_level_pages = get_region_halland_tree_first_level())
            @foreach($first_level_pages as $index => $page)
                <li class="mx1" style="display:inline;">
                @if($page->active === true)
                    <a class="rh-link--navigation" href="{{ $page->url }}" style="border-bottom:2px solid pink;">{{ $page->post_title }}</a>
                @else
                    <a class="rh-link--navigation" href="{{ $page->url }}">{{ $page->post_title }}</a>
                @endif
                </li>
            @endforeach
        </ul>
    </nav>
</div>