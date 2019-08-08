<?php

// public - acessible outside of class
// protected - acessible in class and any extended classes
// private - acessible only in owner class

//  Abstrat classes

// - can not be instantiated and used directly
// - must be extended by another class
// - if a property or method is "abstract" then the class also must be "abstract"

class User{

    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($username, $password)
    {

        $this->username= $username;
        $this->password= $password;
        //__construct runs all the time that a class is instantiated
        //echo 'constructed call';
    }

    public function register(){
        echo "User Registered";
    }
    public function login(){
        $this ->auth_user();
        //echo $username. ' is now logged in';
    }

    public function auth_user(){
        echo $this->username. ' is authenticated';
    }

    public function __destruct()
    {
        // __destruct runs all the time that everything is done
        // e.g. here we can close database connection
        //echo 'Destructor call';
    }
}

$User = new User('daniel','aaa');


//$User->register();
$User->login();
