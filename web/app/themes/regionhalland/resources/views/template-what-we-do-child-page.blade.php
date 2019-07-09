{{--

    Template Name: Barnsida till "Vad vi gör"

--}}

@extends('layouts.app')

@section('content')

    @include('partials.content.hero')

    <main id="main">
        <div class="mx-auto pl3 pt2 pb1" style="max-width:1440px; background:#FBF9F4;">
            <a href="../" class="rh-round-button rh-round-button--small icon-arrow-left"></a>
            <strong>
                <a href="../" class="h3 rh-link--navigation" style="line-height: 1.4;">
                    Vad vi gör
                </a>
            </strong>
        </div>
        
        @include('partials.content.content')

        @include('partials.content.blurbs')

    </main>

    @include('partials.content.newsletter')

@endsection
