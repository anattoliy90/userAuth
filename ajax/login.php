<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Autoloader.php';

$res['success'] = false;
$res['message'] = 'Не правильный email или пароль';
$email = htmlspecialchars($_REQUEST['EMAIL']);
$pass = htmlspecialchars($_REQUEST['PASS']);
$isExist = User::isExist($email);
$login = User::login($email, $pass);

if ($isExist) {
    if ($login) {
        $_SESSION['user_id'] = $login;
        $res['success'] = true;
        $res['message'] = '';
    }
} else {
    $res['message'] = 'Пользователь не найден';
}

echo json_encode($res);
