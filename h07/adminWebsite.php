<?php
session_start();

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css.css\">" ;

if (isset($_SESSION["user"])) {
    $users= $_SESSION["rol"];
    switch ($users){
        case "administrator":
            echo "<h1>Welkom ".$_SESSION["rol"]." ".$_SESSION["user"]. " op de admin website";
            echo "<p><a href='school.php'>login</a></p>";
            echo "<p><a href='website.php'>gebruiker site</a></p>";
            break;
        case "gebruiker":
            echo "<h1>U bent ".$_SESSION["rol"]." ".$_SESSION["user"]. " en hebt niet genoeg rechten om deze pagina te zien";
            echo "<p><a href='school.php'>login</a></p>";
            echo "<p><a href='website.php'>gebruiker site</a></p>";
            break;

    }
}else{
    header('location: school.php');
}
