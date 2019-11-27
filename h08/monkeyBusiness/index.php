<?php
include_once ("apenLijst.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monkey Business</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
<img src="img/monkey-business.jpg" alt="monkey business logo">
<h1 class="p">Select your monkey!</h1>
<img src="img/monkey_swings.png" alt="monkey swing"><br>
<?php
LijstMaker();
?>
</body>
</html>
