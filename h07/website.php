<?php
session_start();

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css.css\">" ;

if (isset($_SESSION["user"])) {

    echo "<h1>Welkom ".$_SESSION["rol"]." ".$_SESSION["user"]. " op de website";
    echo "<p><a href='school.php'>login</a></p>";
    echo "<p><a href='adminWebsite.php'>admin site</a></p>";
}else{
    header('location: school.php');
}
