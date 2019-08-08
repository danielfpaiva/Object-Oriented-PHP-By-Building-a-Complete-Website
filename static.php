<?php

class User{
    public static $minPassLength = 5;
    public $username;

    public static function validatePassword($password){
        if(strlen($password) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}

/*
$password = 'passa';


if(User::validatePassword($password)){
    echo 'Password is valid.';
} else {
    echo 'Password is not valid';
}
*/

echo User::$minPassLength;