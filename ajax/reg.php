<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Autoloader.php';

$res['success'] = false;
$res['error'] = false;
$res['message'] = 'Пользователь не был добавлен';
$name = htmlspecialchars($_REQUEST['NAME']);
$email = htmlspecialchars($_REQUEST['EMAIL']);
$pass = htmlspecialchars($_REQUEST['PASS']);
$isExist = User::isExist($email);

if ($isExist) {
    $res['error'] = true;
    $res['message'] = 'Пользователь с такой электронной почтой уже существует';
} else {
    if (User::add($name, $email, $pass)) {
        $res['success'] = true;
        $res['message'] = 'Пользователь добавлен';
    } else {
        $res['error'] = true;
    }
}

echo json_encode($res);
