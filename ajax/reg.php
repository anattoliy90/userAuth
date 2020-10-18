<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Autoloader.php';

$res['success'] = false;
$res['message'] = 'Пользователь не был добавлен';
$name = htmlspecialchars($_REQUEST['NAME']);
$email = htmlspecialchars($_REQUEST['EMAIL']);
$pass = htmlspecialchars($_REQUEST['PASS']);
$isExist = User::isExist($email);

if ($isExist) {
    $res['message'] = 'Пользователь с такой электронной почтой уже существует';
} else {
    if (User::add($name, $email, $pass)) {
        $res['success'] = true;
        $res['message'] = 'Пользователь добавлен';
    }
}

echo json_encode($res);
