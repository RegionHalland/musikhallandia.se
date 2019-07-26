@php($myContact = get_region_halland_single_page_information($cid))
<div class="mx-auto;">
	<div class="mb2">
		<a href="./" aria-label="Visa alla kontakter" class="rh-round-button rh-round-button--small icon-arrow-left"></a>
		<strong>
			<a href="./" class="h3 rh-link--navigation" style="line-height: 1.4;">
				Visa alla kontakter
			</a>
		</strong>
	</div>

	@php($myImage = get_region_halland_acf_page_contact_card_image($cid))
	@if($myImage['has-image'] == 1)
		<div class="mr3 mx-auto" style="text-align:center; overflow: hidden; position: relative; width:400px; height:300px; ">
			<img src="{{$myImage['image-url']}}" alt="{{$myImage['image-alt']}}" style="width:400px; height:300px;">
			{{-- Decorative triangles --}}
			<span style="width:0; height: 0; position: absolute; bottom: 0; left: 0; border-left: 30px solid #FA3CB4; border-top: 80px solid transparent;"></span>
			<span style="width:0; height: 0; position: absolute; top: 0; right: 0; border-right: 30px solid #FA3CB4; border-bottom: 80px solid transparent;"></span>
		</div>
	@endif
	<div class="mx-auto" style="text-align:center;">
		<h1>{{get_region_halland_acf_page_contact_card_name($cid)}}</h1>
		<p>
			<strong>{{get_region_halland_acf_page_contact_card_title($cid)}}</strong>
		</p>
		<p>
			<strong>E-post:</strong> {{get_region_halland_acf_page_contact_card_epost($cid)}}
		</p>
	</div>
	<div class="mx-auto" style="max-width: 50em;">
		{!! wpautop($myContact->post_content) !!}
	</div>
</div>
