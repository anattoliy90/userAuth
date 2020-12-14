<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Autoloader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/resources/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Registration</title>
</head>
<body>
    <header class="header">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/resources/components/menu/index.php' ?>
    </header>
    <section class="content row">
    