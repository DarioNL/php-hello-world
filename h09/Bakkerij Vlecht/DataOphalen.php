<?php


class DataOphalen
{

    public $vraag;

    function __construct($vraag)
    {
        $dbc = mysqli_connect('localhost','root', '', 'bakkerijvlecht') or die('Error connecting.');
        $query = "SELECT $vraag FROM broodjes";
        $result = mysqli_query($dbc, $query) or die ("Error querying.");
        $row = mysqli_fetch_array($result);
        $this->data = $row[$vraag];
    }
}