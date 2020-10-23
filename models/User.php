<?php

class User
{
    public static function add($name, $email, $pass)
    {
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $db = Db::connect();
        $sql = 'INSERT INTO user (name, email, password) VALUES (?, ?, ?)';
        $query = $db->prepare($sql);
        $result = $query->execute([$name, $email, $pass]);

        $query = null;
        $db = null;

        return $result;
    }

    public static function isExist($email)
    {
        $db = Db::connect();
        $sql = 'SELECT * FROM user WHERE email=?';
        $query = $db->prepare($sql);
        $query->execute([$email]);
        $user = $query->fetch();

        if ($user) {
            $user = $user['id'];
        }

        $query = null;
        $db = null;

        return $user;
    }

    /**
     * @param string $email user email
     * @param string $pass password hash
     * @return int user id
    */
    public static function login($email, $pass)
    {
        $result = 0;

        $db = Db::connect();
        $sql = 'SELECT * FROM user WHERE email = ?';
        $query = $db->prepare($sql);
        $query->execute([$email]);
        $user = $query->fetch();
        

        if (password_verify($pass, $user['password'])) {
            $result = intval($user['id']);
        }

        $query = null;
        $db = null;

        return $result;
    }
}
