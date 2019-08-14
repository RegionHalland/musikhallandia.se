@if(get_the_post_thumbnail_url())
    <div class="mx-auto" style="max-width:1440px;">
    	<img src="{{ get_the_post_thumbnail_url() }}" width="100%" alt="" />
    </div>
@endif