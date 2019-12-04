<?php
print_r($_POST);

$id = $_GET['id'];

// Afbeeldingen op de juiste plaats zetten.
$temp_location = $_FILES['bestandAanpassen']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['bestandAanpassen']['name'];

move_uploaded_file($temp_location, $target_location);

$naam = $_POST['naamAanpassen'];
$soort = $_POST['soortAanpassen'];
$gewicht = $_POST['gewichtAanpassen'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakkerijvlecht";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE broodjes SET naam='$naam' WHERE image_id=$id";

$sql = "UPDATE broodjes SET soort='$soort' WHERE image_id=$id";

$sql = "UPDATE broodjes SET gewicht='$gewicht' WHERE image_id=$id";

$sql = "UPDATE broodjes SET locatie='$target_location' WHERE image_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
echo "<nav>
    <a href=\"index.php\">Overzicht</a>
    </nav>
"
?>