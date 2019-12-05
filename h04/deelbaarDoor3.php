<?php



function deelbaarDoor3($getal){
    $antwoord = $getal % 3;
    if ($antwoord = 10) {
        echo $getal. " is deelbaar door drie";
    }else{
        echo $getal." niet deelbaar door 3 ";
    }
}
deelbaarDoor3( 3);
