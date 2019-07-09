<?php

    $type = 1;
    $nid = 0;
    
    if(isset($_GET["nid"])){
        $nid = $_GET["nid"];
        $type = 2;
    }

?>

@if($type == 1)
    @include('partials.content.simple-news-all')
@endif
                    
@if($type == 2)
    @include('partials.content.simple-news-single')
@endif