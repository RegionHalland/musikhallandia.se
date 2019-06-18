{{-- @if(function_exists('get_region_halland_page_children'))
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
@endif --}}


@if(function_exists('get_region_halland_tree_first_second_level_child_pages'))
    @php($myPages = get_region_halland_tree_first_second_level_child_pages())
    @if(isset($myPages) && !empty($myPages['first_page']))
        <div class="py2" style="background: #EFE7DA;">
            <nav aria-label="Navigering nivå två" class="flex items-center justify-between mx-auto" style="max-width: 1440px; background: #EFE7DA;">
                <ul class="" style="display: inline;">
                    @if($myPages['first_page']->active == 1)
                        <li class="mx1" style="display:inline;">
                            <a class="rh-link--navigation py1" style="border-bottom: 4px solid #FA3CB4;" href="{{ $myPages['first_page']->url }}">{{ $myPages['first_page']->post_title }}</a>
                        </li>
                    @else
                        <li class="mx1" style="display:inline;">
                            <a class="rh-link--navigation" href="{{ $myPages['first_page']->url }}">{{ $myPages['first_page']->post_title }}</a>
                        </li>
                    @endif
                    @if (!empty($myPages['page_children']))
                        @foreach ($myPages['page_children'] as $myChilds)
                            <li class="mx1" style="display:inline;">
                                @if($myChilds->active == 1)
                                    <a class="rh-link--navigation py1" style="border-bottom: 4px solid #FA3CB4;" href="{{ $myChilds->url }}">{{ $myChilds->post_title }}</a>
                                @else
                                    <a class="rh-link--navigation" href="{{ $myChilds->url }}">{{ $myChilds->post_title }}</a>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </nav>
        </div>
    @endif
@endif