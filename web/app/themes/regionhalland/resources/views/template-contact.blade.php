{{--

    Template Name: Kontakt

--}}

    <?php

        $type = 1;
        $cid = 0;
        
        if(isset($_GET["cid"])){
            $cid = $_GET["cid"];
            $type = 2;
        }

    ?>

@extends('layouts.app')

@section('content')

    @include('partials.content.hero')
    @include('partials.navigation.nav-level2')
    <main id="main">
        <div class="rh-xpad-A pt3 pb3 mx-auto" style="max-width: 1440px; background: #FBF9F4">
            <div class="rh-xpad-B mx-auto" style="max-width: 1440px;">
                <div class="clearfix">
                    
                    {{-- Content --}}

                        
                        @if($type == 1)
                            @include('partials.content.contact_lista')
                        @endif
                        
                        @if($type == 2)
                            @include('partials.content.contact_enskild')
                        @endif



                </div>
            </div>
        </div>
    </main>
    @include('partials.content.newsletter')
@endsection
