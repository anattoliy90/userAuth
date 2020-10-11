<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/userAuth/classes/Autoloader.php';

$name = htmlspecialchars($_REQUEST['NAME']);
$email = htmlspecialchars($_REQUEST['EMAIL']);
$pass = htmlspecialchars($_REQUEST['PASS']);

$db = Db::connect();
$sql = 'SELECT * FROM user';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll();

echo "<pre>";print_r($result);
