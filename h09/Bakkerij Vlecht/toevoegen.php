<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bakkerij Vlecht</title>
    <link href="style.css" rel="stylesheet">
</head>
<body
<header>
    <img src="img/baguette.jpg" alt="Mr Wheeky logo">
</header>
<nav>
    <a href="index.php">Overzicht</a>
    <a href="toevoegen.php">Broodjes toevoegen</a>
</nav>
<h1>
    Broodjes weergeven
</h1>
<p>
    Globale informatie van de verschillende broodjes
</p>
<form role="form" method="post">
<div class="form">
    <label for="userfile[]">Bestanden:</label>
    <input name="userfile[]" type="file" multiple="multiple" class="form-control" id="userfile[]">
</div>
<div class="form">
    <label for="type">Omschrijving:</label>
    <input type="text" class="Form kiezen" name="omschijving" value="">
</div>
<div class="form">
    <label for="type">Uitvoering:</label>
    <input type="text" class="Form kiezen" name="uivoering" value="">
</div>
<div>
    <label for="type">Categorie:</label>
    <input type="text" class="Form kiezen" name="categorie">
</div>
<button type="submit" name="knop" class="btn btn-default">Submit</button>
</form>
<br>
<?php
?>
</body>
</html>
