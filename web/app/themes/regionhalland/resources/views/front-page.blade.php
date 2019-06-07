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
            <h1>Aktuella evenemang</h1>
            Här hamnar själva sidinnehållet
            <div class="clearfix">
                <div class="col col-12 md-col-4 px1">
                    <div style="height:200px; background: #777777;">BILD HÄR</div>
                    <strong>Arrangemangets namn</strong><br>
                    Information om arrangemanget
                </div>
                <div class="col col-12 md-col-4 px1">
                    <div style="height:200px; background: #777777;">BILD HÄR</div>
                    <strong>Arrangemangets namn</strong><br>
                    Information om arrangemanget
                </div>
                <div class="col col-12 md-col-4 px1">
                    <div style="height:200px; background: #777777;">BILD HÄR</div>
                    <strong>Arrangemangets namn</strong><br>
                    Information om arrangemanget
                </div>
            </div>
        </main>
    </div>

    @include('partials.newsletter')

@endsection


