{{--

    Template Name: Sektionssida

--}}

@extends('layouts.app')

@section('content')
    @php($myParentPage = get_region_halland_parent_page())
    <div class="rh-xpad-B py2 mx-auto" style="max-width:1440px;">
        @if($myParentPage['has_back'] == 1)
            <a href="{{$myParentPage['url']}}" class="rh-round-button--vuxhalland rh-round-button icon-arrow-left"></a>
            <a href="{{$myParentPage['url']}}" class="pl1 rh-link--navigation">{{$myParentPage['post_title']}}</a>

        @else
            <a href="/" class="rh-round-button--vuxhalland rh-round-button icon-arrow-left"></a>
            <a href="/" class="pl1 rh-link--navigation">Startsidan</a>
        @endif
    </div>
    @include('partials.new_blurbs-list')
    @include('partials.section-navigation')
@endsection