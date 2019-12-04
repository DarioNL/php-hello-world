<?php
include ('DataOphalen.php');
include ('TabelTellen.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bakkerij Vlecht</title>
    <link href="broodstyle.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <h2 style="color:white">Bakkerij Vlecht Beheer</h2>
    </div>
</header>
<div class="start">
<nav>
    <a href="index.php">Overzicht</a>
    <a href="toevoegen.php">Broodjes toevoegen</a>
</nav>
<h1>
    Broodjes weergeven
</h1>
<p class="lead">
    Globale informatie van de verschillende broodjes
</p>
<table class="tabel">
<tbody>
<tr id="namen">
    <td>
        naam
    </td>
    <td>
        gewicht
    </td>
    <td>
        soort
    </td>
    <td>
        extra details
    </td>

</tr>
    <?php
    TabelMaken();
    ?>
</tbody>
</table>
</div>
</body>
</html>
