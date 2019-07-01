@extends('layouts.app')
@section('content')
    @include('partials.content.hero-widget')
    @include('partials.content.ingress-with-navigation', array('ingress_text' => 'Musik Hallandia är en musikinstitution helägd av Region Halland med målet att vara hela Hallands musikplattform. Vi vill förstärka kulturens kraft för att främja kreativiteten och öppenheten i regionen - och för att bygga ett musikliv för alla.'))
    @include('partials.content.event-grid')
    @include('partials.content.newsletter')

@endsection


