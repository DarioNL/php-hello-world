<?php
session_start();

$mesage = "inloggen";

if (isset($_POST['username']) && !empty($_POST['username'])
    && !empty($_POST['password'])) {
    $users = $_POST['username'].$_POST['password'];
    switch ($users){
        case "klaas@carpets.nlsnoepje777":
        case "piet@worldonline.nldoetje123":
        case "truushendriks@wegweg.nlarkiearkie201";
            $_SESSION['username'] = ($_POST['username']);
            $mesage = 'Welkom!!!';
            break;
        default:
            $mesage = "inloggen is niet gelukt probeer het opnieuw";
    }

}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulier</title>
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
</body>
</html>
