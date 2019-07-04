{{--

    Template Name: Press

--}}

@extends('layouts.app')

@section('content')

    @include('partials.content.hero')
    @include('partials.navigation.nav-level2')
    <main id="main">
        <div class="rh-xpad-A pt3 pb3 mx-auto" style="max-width: 1440px; background: #FBF9F4">
            <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
                <div class="clearfix">
                    @include('partials.content.content')
                    @include('partials.content.simple-news')
                </div>
            </div>
        </div>
    </main>
    @include('partials.content.newsletter')
@endsection
