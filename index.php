<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once $_SERVER['DOCUMENT_ROOT'] . '/userAuth/classes/Autoloader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Registration</title>
</head>
<body>
    <div class="registration row">
        <h1>Registration</h1>
        
        <form class="registration__form col s12" action="/" name="REGISTRAION" method="POST">
            <div class="registration__errors red-text text-lighten-1"></div>

            <input type="text" name="NAME" placeholder="Name" required>
            <input type="email" name="EMAIL" placeholder="Email" required>
            <input class="registration__pass" type="password" name="PASS" placeholder="Password" required>
            <button class="registration__submit btn waves-effect waves-light" type="submit">Submit</button>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
