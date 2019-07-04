@extends('layouts.app')
@section('content')

    @include('partials.content.hero')
    <main id="main">
        @include('partials.content.content')
        @include('partials.content.blurbs')
    </main>
    @include('partials.content.newsletter')
@endsection
