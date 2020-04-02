<?php

class Animal{

    
    public function __construct(){

        echo"im alive <br/>";
    }
    public function move(){
        echo"(...)";
    }

    public function __destruct(){
        echo "im dead";
    }
 
}

$a = new Animal();
$a->move();


?>