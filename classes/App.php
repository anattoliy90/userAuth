<?php

class App {
    public static function log($mess = '') {
        $logFileName = $_SERVER['DOCUMENT_ROOT'] . '/log.txt';
        $now = date('d.m.Y H:i:s');
        $separator = '---------------------------------------';

        if (gettype($mess) == 'array') {
            $mess = print_r($mess, true);
        }

        file_put_contents($logFileName, $mess . "\r\n" . $separator . "\r\n" . $now . "\r\n\r\n", FILE_APPEND);
    }
}
