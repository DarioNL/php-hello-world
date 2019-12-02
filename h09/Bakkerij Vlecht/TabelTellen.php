<?php


class TabelTellen
{

    public $database;

    function __construct($tabel)
    {
        $dbc = mysqli_connect('localhost','root', '', 'bakkerijvlecht') or die('Error connecting.');
        $query = "SELECT COUNT(*) FROM $tabel";
        $result = mysqli_query($dbc, $query) or die ("Error querying.");
        $row = mysqli_fetch_array($result);
        $this->aantal = $row['COUNT(*)'];
    }
}