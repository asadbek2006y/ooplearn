<?php 
// static Methods & Property
// static

class Dog
{
    public $name;
    public static $weight;

    CONST BREED = 'Mortal';

    public function bark()
    {
        return self::BREED;
    }
    public static function eat()
    {
        return 'eating';
    }
}
// $bingo = new Dog();
// $bingo->name = "Ningo";
// echo $bingo->bark();

echo Dog::BREED;