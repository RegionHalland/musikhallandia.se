@while(have_posts()) @php(the_post())                            
    <h1>{{ $post->post_title }}</h1>
    <strong>
        {{ get_region_halland_acf_page_ingress() }}
    </strong>
    <p>
        {{ the_content() }}
    </p>
@endwhile
                        
@php($myData = get_region_halland_acf_main_post_page_contact_cards())
@if(isset($myData))
    <div>
        {{-- <ul style="display:inline-block"> --}}
        <ul style="display:inline-block;width:100%;">
        @foreach ($myData as $data)
            {{-- <li class="pb4" style="display:inline-block"> --}}
            <li class="pb4 rh-contact-list__item">
                @if($data['contact_has_image'])
                    {{-- <div class="mr3" style="text-align:center; overflow: hidden; position: relative; width:400px; height:300px; "> --}}
                    <div style="text-align:center; overflow: hidden; position: relative; width:100%;max-width:400px;">
                        {{-- <img src="{{ $data['contact_image_url'] }}" alt="{{ $data['contact_image_alt'] }}" style="width:400px; height:300px;"> --}}
                        <img src="{{ $data['contact_image_url'] }}" alt="{{ $data['contact_image_alt'] }}" style="width:100%;max-width:400px;">
                        {{-- Decorative triangles --}}
                        <span style="width:0; height: 0; position: absolute; bottom: 0; left: 0; border-left: 30px solid #FA3CB4; border-top: 80px solid transparent;"></span>
                        <span style="width:0; height: 0; position: absolute; top: 0; right: 0; border-right: 30px solid #FA3CB4; border-bottom: 80px solid transparent;"></span>
                    </div>
                @endif
                <h2>
                    <a href="./?cid={{$data['post_id']}}" title="" class="rh-search-elements-title" style="color:black">
                        {!! $data['contact_name'] !!}
                    </a>
                </h2>
                <p>
                    <strong>
                        {{ $data['contact_title'] }}
                    </strong>
                </p>
                <p style="overflow-wrap: break-word;">
                    {{ $data['contact_epost'] }}
                </p>
            </li>
        @endforeach
        </ul>
    </div>
@endif
