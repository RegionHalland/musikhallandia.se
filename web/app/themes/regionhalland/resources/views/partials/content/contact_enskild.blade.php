@php($myContact = get_region_halland_single_page_information($cid))
<div>

	<a href="./">[TILLBAKA]</a><br>

	{{$myContact->post_title}}<br>
	{{$myContact->post_content}}<br>

	Namn: {{get_region_halland_acf_page_contact_card_name($cid)}}<br>
	Epost: {{get_region_halland_acf_page_contact_card_epost($cid)}}<br>
				
	@php($myLink = get_region_halland_acf_page_contact_card_link($cid))
	@if($myLink['has-link'] == 1)
		<a href="{{$myLink['link-url']}}" target="{{$myLink['link-target']}}">{{$myLink['link-title']}}</a><br>
	@endif

	@php($myImage = get_region_halland_acf_page_contact_card_image($cid))
	@if($myImage['has-image'] == 1)
		<img src="{{$myImage['image-url']}}" width="{{$myImage['image-width']}}" height="{{$myImage['image-height']}}">
	@endif

</div>
