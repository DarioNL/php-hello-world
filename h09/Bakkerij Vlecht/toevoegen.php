<?php

$message = "";

if (isset($_FILES['bestand']) && !empty($_POST['omschijving'])
    && !empty($_POST['uivoering'])&& !empty($_POST['categorie']))  {
    $message = "Het versturen is gelukt.";
}else{
    $message = "Vul alles in!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bakkerij Vlecht</title>
    <link href="broodstyle2.css" rel="stylesheet">
</head>
<body
<header>
    <div class="container">
        <h2 style="color:white">Bakkerij Vlecht Beheer</h2>
    </div>
</header>
<nav>
    <a href="index.php">Overzicht</a>
    <a href="toevoegen.php">Broodjes toevoegen</a>
</nav>

<h2>
    <?php
    echo $message;
    ?>
</h2>
<form role="form" method="post" action="BroodTabelToevoegen.php" enctype="multipart/form-data">
<div class="form">
    <label for="userfile[]">Afbeelding</label>
    <input  type="file" class="Form kiezen" name="bestand">
</div>
<div class="form">
    <label for="type">Naam:</label>
    <input type="text" class="Form kiezen" name="naam" value="">
</div>
<div class="form">
    <label for="type">Soort:</label>
    <input type="text" class="Form kiezen" name="soort" value="">
</div>
<div>
    <label for="type">Gewicht:</label>
    <input type="text" class="Form kiezen" name="gewicht">
</div>
<button type="submit" name="knop" class="btn btn-default">Submit</button>
</form>
<br>
<?php
?>
</body>
</html>
