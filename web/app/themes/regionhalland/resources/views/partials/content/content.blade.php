<div class="rh-xpad-A pt3 pb1 mx-auto" style="max-width: 1440px; background: #FBF9F4">
    <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
        <div class="clearfix">
            {{-- Content --}}
            <div class="col col-12 md-col-9 rh-article">
                @while(have_posts()) @php(the_post())
                <h1>{{ $post->post_title }}</h1>

                <strong>
                    {{ get_region_halland_acf_page_ingress() }}
                </strong>

                <p>
                    {{ the_content() }}
                </p>
                @endwhile
            </div>
        </div>
    </div>
</div>