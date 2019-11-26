<?php

include_once('h08/programma/Programma.php');
include_once('h08/programma/Liedje.php');

$ditprogramma = new Programma();
$ditprogramma->setNaam("mijn eerste programma");
$ditprogramma->setOmschrijving("even testen");

foreach ($ditprogramma->getProgramma() as $p){
    echo $p."<br>";
}

$nieuwliedje = new Liedje("dit is de titel", "rolling stones");

$ditprogramma->voegLiedjesToe($nieuwliedje);

foreach ($ditprogramma->getLiedjes() as $liedje) {
    echo $liedje->getTitel()."-".$liedje->getArtiest()."<br>";
}