<?php
class Programma{
    private $naam = "";
    private $omschrijving ="";
    private $liedjes = array();

    public  function voegLiedjesToe($liedje) {
        $this->liedjes[] = $liedje;
    }

    public function getLiedjes(){
        return $this->liedjes;
    }

    /**
     * Geeft programma infomatie terug
     * @return array
     */
    public function getProgramma(){
        return array("naam" => $this->naam,
            "omschrijving" => $this->omschrijving
        );
    }
    /**
     * geeft het programma een naam
     * @param de naam als string
     */
    public function setNaam($n) {
        if (strlen($n)>=2) {
            $this->naam = $n;
        }
    }
    /**
     * Geeft het progamma een omschrijving
     * @param de omschrijving als string
     */
    /**
     * @param $string
     * @return string
     */
    public function setOmschrijving($string)
    {
        return $this->omschrijving;
    }
}