<?php
session_start();

$mesage = "inloggen om de zwaar bewaakte site in te komen.";

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['username']) && !empty($_POST['username'])
    && !empty($_POST['password'])) {
    $users = $_POST['username'].$_POST['password'];
    switch ($users){
        case "klaas@carpets.nlsnoepje777":
            $_SESSION['user'] = ($_POST['username']);
            $_SESSION['rol'] = 'administrator';
            $mesage = 'Welkom '.$_SESSION['rol'].' '.$_SESSION['user'];
            break;
        case "piet@worldonline.nldoetje123":
        case "truushendriks@wegweg.nlarkiearkie201";
            $_SESSION['user'] = ($_POST['username']);
            $_SESSION['rol'] = 'gebruiker';
            $mesage = 'Welkom '.$_SESSION['rol'].' '.$_SESSION['user'];
            break;
        default:
            $mesage = "inloggen is niet gelukt probeer het opnieuw";
    }


}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulier</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<h1> <?php echo $mesage?> </h1>
<form role="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" class="form-control" id="username" name="username" >
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <button type="submit" class="btn btn-default">Submit</button>

    </div></form>
</div>
</form>
<p><a href="website.php">website</a>
<p><a href="school.php?loguit">loguit</a>
</body>
</html>
