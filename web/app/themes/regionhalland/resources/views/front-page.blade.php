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
    <div class="center px3" style="max-width: 1440px;">
        <main>
            Här hamnar själva sidinnehållet
        </main>
    </div>
    


@endsection


