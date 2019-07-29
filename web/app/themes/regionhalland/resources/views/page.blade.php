{{--

    Template Name: Sektionssida page

--}}

@extends('layouts.app')

@section('content')
	@include('partials.content.hero')
	@include('partials.navigation.nav-level2')
	@include('partials.content.content')
	@include('partials.content.blurbs')
@endsection
