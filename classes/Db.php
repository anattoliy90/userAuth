<?php

class Db
{
    public static function connect()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=users;port=8889', 'root', 'root');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            return 'Connection failed: ' . $e->getMessage();
        }
    }
}
