<?php
// include "Game.php";
// include "Animal.php";
// include "Rabbit.php";
// include "Tortoise.php";

function __autoload($classname){
    include ucfirst($classname).".php";
}



$rabbit = new Rabbit("Roger");
$tortoise = new Tortoise("hi");


$game = new Game();
$game->takepart($rabbit);
$game->takepart($tortoise);

$game->warmup();
$game->start();
$game->report();

?>