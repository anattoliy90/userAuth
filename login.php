<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/userAuth/classes/Autoloader.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="login row">
        <h1>Login</h1>
        
        <form class="login__form col s6" action="/" name="LOGIN" method="POST">
            <div class="login__errors red-text text-lighten-1"></div>
            <div class="login__success teal-text text-lighten-1"></div>

            <input type="email" name="EMAIL" placeholder="Email" required>
            <input class="login__pass" type="password" name="PASS" placeholder="Password" required>
            <button class="login__submit btn waves-effect waves-light" type="submit">Submit</button>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
