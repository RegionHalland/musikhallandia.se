@extends('layouts.app')

@section('content')
    
    <?php
        
        $all = 0;
        if(isset($_GET["all"])){
            $all = $_GET["all"];
        }
    
    ?>

    @include('partials.content.hero-widget')
    
    @include('partials.content.ingress-with-navigation', array('ingress_text' => 'Musik Hallandia är en musikinstitution helägd av Region Halland med målet att vara hela Hallands musikplattform. Vi vill förstärka kulturens kraft för att främja kreativiteten och öppenheten i regionen - och för att bygga ett musikliv för alla.'))
    
    @if($all==1)
        @include('partials.content.events-all-grid')
    @else
        @include('partials.content.events-current-grid')
    @endif

@endsection