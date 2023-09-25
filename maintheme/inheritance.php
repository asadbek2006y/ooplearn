<!-- Meros -->
<?php 
/* Class and Object*/ 

/* extends kalit so'zi orqali ishlatamiz*/ 


abstract class Car 
{
    // property va attribute
    public $model;
    protected $year;
    private $km;

    public function __construct($model,$year,$km)
    {
        $this->model = $model;
        $this->year = $year;
        $this->km = $km;

    }

    // methods
    public function drive()
    {
        return 'driving';
    }   
    public function getYear()
    {
        return $this->year;
    }

    public function km()
    {
        return $this->km;
    }

}

$chevy = new Car('chevrolet',2019,522525584);

echo $chevy->km();