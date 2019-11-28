<?php
include_once ("AutoOverzicht.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mr Wheely</title>
    <link href="autoStyle.css" rel="stylesheet">
</head>
<body>
<header>
    <img src="img/wheely_header.jpg" alt="Mr Wheeky logo">
</header>

<form role="form" method="post">
<div class="form">
    <label for="sell">Merk:</label>
    <select class="form kiezen" id="merk" name="merk">
        <option value="">--Alle merken--</option>
        <option value='Audi' >Audi</option>
        <option value='Ferrari' >Ferrari</option>
        <option value='Fiat' >Fiat</option>
        <option value='Mercedes' >Mercedes</option>
        <option value='Opel' >Opel</option>
        <option value='Volkswagen' >Volkswagen</option>
    </select>
</div>
<div class="form">
    <label for="type">Minimale prijs:</label>
    <input type="text" class="Form kiezen" name="lage prijz" value="">
</div>
<div class="form">
    <label for="type">Maximale prijs:</label>
    <input type="text" class="Form kiezen" name="hoge prijz" value="">
</div>
<button type="submit" name="knop" class="btn btn-default">Submit</button>
</form>
<br>
<?php
if (isset($_POST['merk'])){
    if ($_POST['merk'] != ""){
        getGefilterdeLijst();
    }
}else{
    VoegAutoToeOverzicht();
}
?>
</body>
</html>
