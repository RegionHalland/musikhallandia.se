@if(function_exists('get_region_halland_tree_first_second_level_child_pages'))
    @php($myPages = get_region_halland_tree_first_second_level_child_pages())
    @if(isset($myPages) && !empty($myPages['first_page']) && $myPages['first_page']->post_name != 'vad-vi-gor')
        <div class="rh-xpad-A py2 mx-auto" style="max-width: 1440px; background: #EFE7DA;">
            <div class="rh-xpad-B">
                <nav class="flex items-center justify-between mx-auto" style="max-width: 1440px; background: #EFE7DA;">
                    <ul aria-label="Navigering nivå två" class="" style="display: inline;">
                        @if($myPages['first_page']->active == 1)
                            <li class="mr2" style="display:inline;">
                                <a class="rh-link--navigation py1" style="border-bottom: 4px solid #FA3CB4;" href="{{ $myPages['first_page']->url }}">{{ $myPages['first_page']->post_title }}</a>
                            </li>
                        @else
                            <li class="mr2" style="display:inline;">
                                <a class="rh-link--navigation" href="{{ $myPages['first_page']->url }}">{{ $myPages['first_page']->post_title }}</a>
                            </li>
                        @endif
                        @if (!empty($myPages['page_children']))
                            @foreach ($myPages['page_children'] as $myChilds)
                                <li class="mr2" style="display:inline;">
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
        </div>
    @else     
        <div class="rh-xpad-A pt3 pb1 mx-auto" style="max-width: 1440px; background: #FBF9F4">
            <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
                <div class="">
                    <a href="{{env('WP_HOME')}}/vad-vi-gor/" class="rh-round-button rh-round-button--small icon-arrow-left"></a>
                    <strong>
                        <a href="{{env('WP_HOME')}}/vad-vi-gor/" class="h3 rh-link--navigation" style="line-height: 1.4;">
                            Vad vi gör
                        </a>
                    </strong>
                </div>
            </div>
        </div>  
    @endif
@endif