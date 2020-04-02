<?php
interface IHero{
    public function walk();
    public function showSuperPower();

}

interface ICountable{
    public function showCount();

}

class Superman implements IHero, ICountable{
    public function walk(){
        echo "Fly";
    }
    public function showSuperPower(){
        echo "eye laser";
    }
    public function showCount(){
        echo "1,2,3";
    }
}




?>