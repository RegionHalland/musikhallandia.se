@if(get_the_post_thumbnail_url())
    <div style="min-height: 400px; max-height: 500px; background-image: url('{{ get_the_post_thumbnail_url() }}');  height: 50%; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
        <div class="center rh-caption-hero" style="max-width: 1440px;">
            {{ $post->post_title }}
        </div>
    </div>
@endif