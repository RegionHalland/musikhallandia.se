@if(get_the_post_thumbnail_url())
    <div style="background: rgb(211, 211, 210);">
        <div class="mx-auto" style="max-width:1440px; min-height: 400px; max-height: 420px; background-image: url('{{ get_the_post_thumbnail_url() }}');  height: 50%; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
        </div>
    </div>
@endif