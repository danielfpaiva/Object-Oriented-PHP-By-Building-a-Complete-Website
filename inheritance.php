<?php

class First{
    public $id = 23;
    protected $name = 'Joe';

    public function saySomething($word){
        echo $word;
    }
}

class Second extends First{
    public function getName(){
        echo $this->name;
    }
}

$Second = new Second();

echo $Second->getName();

//echo $Second -> saySomething('hi');