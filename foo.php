<?php
class Foo{
    // this function can not be longer rewriter from childs
    final public function sayHello(){
        echo 'Hello World';
    }
}