<?php 
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