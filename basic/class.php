<?php 
/* Class and Object*/ 

class Car 
{
    // property va attribute
    public $model;
    public $year;

    // methods
    public function drive()
    {
        return 'driving';
    }   
    public function getFuel()
    {
        return 'fueling';
    }


}

$bmw = new Car;

$bmw->name =  "BMW";

echo $bmw->drive();