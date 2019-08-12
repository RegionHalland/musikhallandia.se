@php($myData = get_region_halland_acf_page_evenemang_kommande_items())
@if(isset($myData))
    {{-- <div class="pl4 pt3"> --}}
    <div class="pt3">
        {{-- <div class="clearfix" style="width:1440px;"> --}}
        <div class="clearfix">
        @foreach ($myData as $data)
            <div class="col col-12 md-col-4 px1">
                {{-- <div class="pl2 pr2" style="position:relative;height:300px; width: 400px; overflow:hidden"> --}}
                <div class="pl2 pr2" style="position:relative;overflow:hidden">
                    <img src="{{$data->puff_url}}" width="{{$data->puff_width}}"  alt="{{ $data->puff_alt }}" height="{{$data->puff_height}}">
                    <span style="padding:1em; border-top-right-radius:10px; border-bottom-right-radius: 10px; color: white; background:black; position:absolute; bottom:2em; left:1.5em; ">{{ $data->speltid_datum }}</span>
                </div>
                <div class="pl2 pb3">
                    <strong><a class="rh-link--navigation" href="{{ $data->url }}">{{ $data->post_title }}</a></strong><br>
                    {{ $data->ingress }}
                </div>
            </div>
        @endforeach
        </div>
    </div>
@else
    <div class="pb2" style="text-align: center;">Inga evenemang har lagts in ännu.</div>
@endif
