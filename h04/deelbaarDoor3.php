<?php



function deelbaarDoor3($getal){
    $antwoordt = $getal % 3;
    if ($antwoordt = 10) {
        echo $getal. " is deelbaar door drie";
    }else{
        echo $getal." niet deelbaar door 3 ";
    }
}
deelbaarDoor3( 3);
