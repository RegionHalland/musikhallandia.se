@php($nav_site = get_region_halland_tree_all_levels())
<div>
	<ul>
		@each('partials.navigation.nav-tree-child-list', $nav_site, 'item')
	</ul>
</div>