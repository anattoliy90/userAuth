<?php

spl_autoload_register(function ($class) {
    $directories = [
        '/userAuth/classes/',
    ];

    foreach ($directories as $directory) {
        $file = $_SERVER['DOCUMENT_ROOT'] . $directory . $class . '.php';

        if (file_exists($file)) {
            require_once $file;

            return true;
        }
    }

    return false;
});
