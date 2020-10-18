<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/layouts/header.php'; ?>

<h1 class="main-title">Registration</h1>
<div class="registration col s12">
    <form class="registration__form form" action="/" name="REGISTRAION" method="POST">
        <div class="form__errors red-text text-lighten-1"></div>
        <div class="form__success teal-text"></div>

        <input type="text" name="NAME" placeholder="Name" required>
        <input type="email" name="EMAIL" placeholder="Email" required>
        <input class="form__pass" type="password" name="PASS" placeholder="Password" required>
        <button class="form__submit btn waves-effect waves-light" type="submit">Submit</button>
    </form>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/layouts/footer.php';
