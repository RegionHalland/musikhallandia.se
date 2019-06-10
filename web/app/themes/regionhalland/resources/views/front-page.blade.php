@extends('layouts.app')
@section('content')
    @include('partials.hero')
    {{-- Ingress-container --}}
    <div style="background:#EFE7DA;">
        <div class="center p3" style="max-width:50em; line-height:1.4;">
            {{ get_region_halland_acf_page_ingress() }}
            <p><a href="">Läs mer om oss</a><span class="ml1 icon-arrow-right" style="font-family: feather !important;"></span></p>
        </div>
    </div>

    {{-- Huvudinnehåll --}}
    <div class="center px3 rh-article" style="max-width: 1440px;">
        <main>
            <div style="display:flex; align-content: center;"><h1>Aktuella evenemang</h1></div>
            @php($myData = get_region_halland_acf_page_evenemang_kommande_items())
            @if(isset($myData))
                <div class="clearfix">

                @foreach ($myData as $data)
                    <div class="col col-12 md-col-4 px1">
                        <div style="background: #777777;">{!! $data->image !!}<br></div>
                        <strong><a href="{{ $data->url }}">{{ $data->post_title }}</a></strong><br>
                        {{ $data->ingress }}
                    </div>
                @endforeach
                </div>
            @endif
        </main>
    </div>

    @include('partials.newsletter')

@endsection


