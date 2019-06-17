@if(function_exists('get_region_halland_page_children'))
    @php($myPages = get_region_halland_page_children())
    @if(isset($myPages))
        <div class="py2" style="background: #EFE7DA;">
            <nav aria-label="Navigering nivå två" class="flex items-center justify-between mx-auto" style="max-width: 1440px; background: #EFE7DA;">
                <ul class="" style="display: inline;">
                    @foreach ($myPages as $myChilds)
                        <li class="mx1" style="display:inline;">
                            <a class="rh-link--navigation" href="{{ $myChilds->url }}">{{ $myChilds->post_title }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    @endif
@endif
