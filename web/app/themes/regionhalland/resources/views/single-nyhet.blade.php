@extends('layouts.app')
@section('content')

    @include('partials.content.hero')
    <main id="main">
        <div class="rh-xpad-A pt3 pb1 mx-auto" style="max-width: 1440px; background: #FBF9F4">
            <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
                <div class="">
                    <a href="for-press/" class="rh-round-button rh-round-button--small icon-arrow-left"></a>
                    <strong>
                        <a href="for-press/" class="h3 rh-link--navigation" style="line-height: 1.4;">
                            Press & Media
                        </a>
                    </strong>
                </div>
            </div>
        </div>
        @include('partials.content.content')
        @include('partials.content.blurbs')
    </main>
    @include('partials.content.newsletter')
@endsection
