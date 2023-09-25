<!-- Magic Methodlar -->
<?php 
/* Class and Object*/ 

class Car 
{
    // property va attribute
    public $model;
    public $year;

    public function __construct($model,$year)
    {
        $this->model = $model;
        $this->year = $year;

    }

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

$bmw = new Car('BMW E32',2016);

var_dump($bmw);