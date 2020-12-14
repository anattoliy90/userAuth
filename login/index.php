<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/layouts/header.php';

if (!empty($_SESSION['user_id'])) {
    header('Location: /');
}
?>

<h1 class="main-title">Login</h1>
<div class="login col s12">
    <form class="login__form form" action="/" name="LOGIN" method="POST">
        <div class="form__errors red-text text-lighten-1"></div>
        <div class="form__success teal-text"></div>

        <input type="email" name="EMAIL" placeholder="Email" required>
        <input class="form__pass" type="password" name="PASS" placeholder="Password" required>
        <button class="form__submit btn waves-effect waves-light" type="submit">Submit</button>
    </form>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/layouts/footer.php';
