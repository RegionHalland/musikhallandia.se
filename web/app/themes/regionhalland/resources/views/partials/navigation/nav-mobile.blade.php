{{-- Mobile dropdown menu --}}
<div id="menu-dropdown-anchor"></div>
<div class="rh-menu-dropdown rh-display-only-sm">
    {{-- Menu header --}}
    <div class="rh-menu-dropdown__header">
        {{-- <img class="rh-menu-dropdown__header-logo" src="{!! env('WP_HOME') !!}/include/img/MH_Greyscale.png"> --}}
        <div class="rh-menu-dropdown__header-logo-container">
            <a href="{!! env('WP_HOME') !!}">
                <img class="rh-menu-dropdown__header-logo" src="{!! env('WP_HOME') !!}/include/img/MH_Greyscale.png">
            </a>
        </div>
        
        <div class="rh-round-button rh-menu-dropdown__menu-round-button">
            <span class="icon-menu rh-menu-dropdown__icon-menu"></span>
        </div>
    </div>
    
    {{-- Menu body --}}
    @php($myTree = get_region_halland_tree_all_levels_musik_hallandia())
    <div class="rh-menu-dropdown__body">
        {{-- Level 1 --}}
        @foreach ($myTree as $tree1)
        @php ($level1ChildrenCount = count($tree1['children']))
        <div>
            <div class="rh-menu-dropdown__item">
                <a href="{{ $tree1['page_url'] }}"
                    class="rh-link--navigation rh-menu-dropdown__text">{{ $tree1['post_title'] }}</a>

                @if($level1ChildrenCount > 0)
                <div id="{{ $tree1['ID'] }}"
                    class="rh-round-button rh-round-button--small rh-menu-dropdown__item-round-button">
                    <span class="icon-minus rh-menu-dropdown__icon-item"></span>
                </div>
                @endif
            </div>
        </div>

        {{-- Level 1 - Sub container --}}
        @if($level1ChildrenCount > 0)
        <div id="sub{{ $tree1['ID'] }}" class="rh-menu-dropdown__item__sub-container">
            {{-- Level 2 --}}
            @foreach ($tree1['children'] as $tree2)
            @php ($level2ChildrenCount = count($tree2['children']))
            <div class="rh-menu-dropdown__item rh-menu-dropdown__item__sub-item rh-pl-3">
                <a href="{{ $tree2['page_url'] }}"
                    class="rh-link--navigation rh-menu-dropdown__text">{{ $tree2['post_title'] }}</a>

                @if($level2ChildrenCount > 0)
                <div id="{{ $tree2['ID'] }}"
                    class="rh-round-button rh-round-button--small rh-menu-dropdown__item-round-button">
                    <span class="icon-minus rh-menu-dropdown__icon-item"></span>
                </div>
                @endif
            </div>

            {{-- Level 2 - Sub container --}}
            @if($level2ChildrenCount > 0)
            <div id="sub{{ $tree2['ID'] }}" class="rh-menu-dropdown__item__sub-container">
                {{-- Level 3 --}}
                @foreach ($tree2['children'] as $tree3)
                <div class="rh-menu-dropdown__item rh-menu-dropdown__item__sub-item rh-pl-5">
                    <a href="{{ $tree3['page_url'] }}"
                        class="rh-link--navigation rh-menu-dropdown__text">{{ $tree3['post_title'] }}</a>
                </div>
                @endforeach
            </div>
            @endif

            @endforeach

        </div>
        @endif

        @endforeach

        {{-- Menu footer --}}
        <div>
            <div class="rh-menu-dropdown__item rh-menu-dropdown__footer">
                <a tabindex="16" href="#" class="rh-link--navigation rh-menu-dropdown__text rh-menu-dropdown__footer-text">In English</a>
            </div>
        </div>
    </div>{{-- End of menu's body' --}}

</div>{{-- End of the whole menu --}}
<div class="rh-menu-dropdown__spacing-after"></div>{{-- Menu offset --}}