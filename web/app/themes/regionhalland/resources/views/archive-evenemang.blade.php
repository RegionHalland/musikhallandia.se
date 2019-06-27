@extends('layouts.app')
@section('content')
    @include('partials.content.hero-widget')
    {{-- Ingress-container --}}
    <div style="background:#EFE7DA;">
        <div class="center p3" style="max-width:40em; text-align:center; line-height:1.4;">
            Musik Hallandia är en musikinstitution helägd av Region Halland med målet att vara hela Hallands musikplattform. Vi vill förstärka kulturens kraft för att främja kreativiteten och öppenheten i regionen - och för att bygga ett musikliv för alla.
            <p><a class="rh-link--navigation" href=""><strong>Läs mer om oss</strong></a><span class="ml1 icon-arrow-right" style="font-family: feather !important;"></span></p>
        </div>
    </div>

    {{-- Huvudinnehåll --}}
    <div class="center px3 rh-article" style="max-width: 1440px;">
        <main>
            <div style="width:100%; text-align: center;"><h1>Aktuella evenemang</h1></div>
            @php($myData = get_region_halland_acf_page_evenemang_kommande_items())
            @if(isset($myData[0]))

                <div class="clearfix">

                    @foreach ($myData as $data)
                        <div class="col col-12 md-col-4 px1">
                            <div style="background: #777777;">{!! $data->image !!}<br></div>
                            <strong><a class="rh-link--navigation" href="{{ $data->url }}">{{ $data->post_title }}</a></strong><br>
                            {{ $data->ingress }}
                        </div>
                    @endforeach
                </div>
            @else
                <div class="pb2" style="text-align: center;">Just nu har vi inga aktuella evenemang.</div>
            @endif
        </main>
    </div>

    @include('partials.content.newsletter')

@endsection



