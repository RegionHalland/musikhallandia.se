@if(get_the_post_thumbnail_url())
    <div class="center rh-hero">
        <img class="rh-image-hero" src="{{ get_the_post_thumbnail_url() }}" alt="">
        <div class="rh-caption-hero rh-caption-hero--secondary rh-caption-hero--rounded">
            {{ $post->post_title }}
        </div>
    </div>
@endif