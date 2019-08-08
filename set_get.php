<?php
class Post{
    private $name;

    public function __set($name, $value)
    {
        echo 'Setting '.$name. ' to '.$value.'</br>';
        $this->name = $value;
    }
    public function __get($name)
    {
        echo 'Getting '.$name. ' a '. $this->name.'</br>';
    }

    public function __isset($name)
    {
        echo 'Is '.$name.' set?';
        return isset($this->name);
    }
}

$Post = new Post();

$Post->name='testing';

echo $Post->name;

var_dump(isset($Post->name));