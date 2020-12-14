<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Autoloader.php';

$res['success'] = false;
$res['message'] = 'Пользователь не был добавлен';
$formName = htmlspecialchars($_REQUEST['NAME']);
$formEmail = htmlspecialchars($_REQUEST['EMAIL']);
$formPass = htmlspecialchars($_REQUEST['PASS']);
$isExist = User::isExist($formEmail);
$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
$formFiles = [];

if ($isExist) {
    $res['message'] = 'Пользователь с такой электронной почтой уже существует';
} else {
    foreach ($_FILES['FILES']['error'] as $k => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmpName = $_FILES['FILES']['tmp_name'][$k];
            $fileName = $uploadDir . time() . '_' . $_FILES['FILES']['name'][$k];
            $formFiles[] = $fileName;
    
            move_uploaded_file($tmpName, $fileName);
        }
    }
    
    $formFiles = implode(', ', $formFiles);
    
    if (User::add($formName, $formEmail, $formPass, $formFiles)) {
        $res['success'] = true;
        $res['message'] = 'Пользователь добавлен';
    }
}

echo json_encode($res);
