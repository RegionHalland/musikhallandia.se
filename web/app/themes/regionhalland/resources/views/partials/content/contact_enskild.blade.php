@php($myContact = get_region_halland_single_page_information($cid))
<div>
	<div class="mb2">
		<a href="./" class="rh-round-button rh-round-button--small icon-arrow-left"></a>
		<strong>
			<a href="./" class="h3 rh-link--navigation" style="line-height: 1.4;">
				Visa alla kontakter
			</a>
		</strong>
	</div>

	@php($myImage = get_region_halland_acf_page_contact_card_image($cid))
	@if($myImage['has-image'] == 1)
		<img src="{{$myImage['image-url']}}" width="{{$myImage['image-width']}}" height="{{$myImage['image-height']}}">
	@endif

	<h1>{{get_region_halland_acf_page_contact_card_name($cid)}}</h1>
	<p>{{get_region_halland_acf_page_contact_card_title($cid)}}</p>
	<p><strong>E-post:</strong> {{get_region_halland_acf_page_contact_card_epost($cid)}}</p>
	{!! wpautop($myContact->post_content) !!}

</div>
