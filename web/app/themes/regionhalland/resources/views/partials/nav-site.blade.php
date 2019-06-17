<div style="background: #EFE7DA;">
    <nav aria-label="Sidhuvud" class="flex items-center justify-between mx-auto" style="max-width: 1440px; background: #EFE7DA;">
        <a href="{!! env('WP_HOME') !!}"><img style="" src="{!! env('WP_HOME') !!}/include/img/MH_Greyscale.png" /></a>
        <ul class="" style="display: inline;">
            @php($first_level_pages = get_region_halland_tree_first_level())
            @foreach($first_level_pages as $index => $page)
                <li class="mx1" style="display:inline;">
                    <a class="" href="{{ $page->url }}">{{ $page->post_title }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>