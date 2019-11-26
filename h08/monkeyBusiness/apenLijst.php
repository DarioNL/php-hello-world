<?php
    function LijstMaker()
    {
        $apen[] = "Baviaan";
        $apen[] = "Guereza";
        $apen[] = "Langoer";
        $apen[] = "Tamarin";
        $apen[] = "Neusaap";
        $apen[] = "Halfaap";
        $apen[] = "Mandril";
        $apen[] = "Oeakari";
        $apen[] = "Faunaap";
        $apen[] = "Hoelman";
        $apen[] = "Meerkat";
        $apen[] = "Oormaki";
        $apen[] = "Gorilla";
        $apen[] = "Kuifaap";
        $apen[] = "Mensaap";
        $apen[] = "Spinaap";

        foreach ($apen as $aap) {
            echo "<A class='aap'  href=https://www.google.nl/search?q=" . $aap . ">" . $aap . "</a> <br>";
        }
    }
?>