@php($checkCookieNotice = check_region_halland_cookie_notice())
@if ($checkCookieNotice == false)
	@php($cookie_notice = get_region_halland_cookie_notice())
	<div class="rh-cookie mx-auto" style="max-width:1440px; background-color: #E4E4E4;">
		<span class="rh-cookie-icon"></span>
		<p class="rh-cookie-description">
			{!! $cookie_notice['message'] !!}
		</p>
		<button id="cookie-consent" style="width:18ex;" class="rh-button cookie-button" aria-label="Acceptera cookies och dölj meddelandet" role="button">{!! $cookie_notice['button'] !!}</button>
	</div>
@endif