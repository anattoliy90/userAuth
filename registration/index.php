<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/layouts/header.php';

if (!empty($_SESSION['user_id'])) {
    header('Location: /');
}
?>

<h1 class="main-title">Registration</h1>
<div class="registration col s12">
    <form class="registration__form form" name="REGISTRAION" method="POST" enctype="multipart/form-data">
        <div class="form__errors red-text text-lighten-1"></div>
        <div class="form__success teal-text"></div>

        <input type="text" name="NAME" placeholder="Name" required>
        <input type="email" name="EMAIL" placeholder="Email" required>
        <input class="form__pass" type="password" name="PASS" placeholder="Password" required>
        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input class="form__file" type="file" name="FILE" multiple>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload files">
            </div>
        </div>
        <button class="form__submit btn waves-effect waves-light" type="submit">Submit</button>
    </form>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/layouts/footer.php';
