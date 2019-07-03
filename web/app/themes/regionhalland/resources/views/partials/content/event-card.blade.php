<div class="clearfix">

    @foreach ($myData as $data)
        <div class="col col-12 md-col-4 px1">
            <div>{!! $data->image !!}</div>
            <strong><a class="rh-link--navigation" href="{{ $data->url }}">{{ $data->post_title }}</a></strong><br>
            {{ $data->ingress }}
        </div>
    @endforeach
</div>