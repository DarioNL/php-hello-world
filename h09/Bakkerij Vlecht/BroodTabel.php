<?php
print_r($_POST);
print_r($_FILES);

// Afbeeldingen op de juiste plaats zetten.
$temp_location = $_FILES['bestand']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['bestand']['name'];

move_uploaded_file($temp_location, $target_location);

// De database die wordt gebruikt.
$naam = $_POST['naam'];
$soort = $_POST['soort'];
$gewicht = $_POST['gewicht'];

$mysql = new mysqli('localhost', 'root', '', 'bakkerijvlecht', '3306') or die('Error connecting.');
$query = "INSERT INTO broodjes VALUES 0,NOW(),";
$stmt = $mysql->prepare($query) or die('Error preparing.');
$stmt->bind_param('sss', $target_location, $naam,$soort,$gewicht) or die('Error binding Param.');
$stmt->execute() or die('Error inserting image in database.');
$stmt->close();

echo "het is gelukt";