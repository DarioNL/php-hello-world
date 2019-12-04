<?php
print_r($_POST);

// Afbeeldingen op de juiste plaats zetten.
$temp_location = $_FILES['bestandAanpassen']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['bestand']['name'];

move_uploaded_file($temp_location, $target_location);

$naam = $_POST['naamAanpassen'];
$soort = $_POST['soortAanpassen'];
$gewicht = $_POST['gewichtAanpassen'];

// De database die wordt gebruikt.
$mysqli = new mysqli('localhost', 'root', '', 'bakkerijvlecht', '3306') or die('Error connecting.');

$dbc = mysqli_connect('localhost','root', '', 'bakkerijvlecht') or die('Error connecting.');
$query = "UPDATE broodjes SET locatie $target_location SET naam $naam SET soort $soort SET soort $soort SET gewicht $gewicht WHERE image_id = $id";
$result = mysqli_query($dbc, $query) or die ("Error querying.");