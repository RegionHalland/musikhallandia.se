<div class="clearfix">

    @foreach ($myData as $data)
        <div class="col col-12 md-col-4 px1">
            <div style="position:relative;height:300px; width: 400px; overflow:hidden;">
                {!! $data->image !!}
                <span style="padding:1em; border-top-right-radius:10px; border-bottom-right-radius: 10px; color: white; background:black; position:absolute; bottom:1em; left:0; ">{{ $data->speltid_datum }}</span>
            </div>
            <strong><a class="rh-link--navigation" href="{{ $data->url }}">{{ $data->post_title }}</a></strong><br>
            {{ $data->ingress }}

        </div>
    @endforeach
</div>