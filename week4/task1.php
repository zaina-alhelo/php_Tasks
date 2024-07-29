<?php


class Car {
    public $make; 
    public $model;
    public $VIN;
    
    function __construct($make, $model, $VIN) {
        $this->make = $make;
        $this->model = $model;
        $this->VIN = $VIN;
    }

    function __destruct() {
        echo "Car is destroyed<br>";
    }

    public function getDetails() {
        return $this->make . "<br>" . $this->model . "<br>" . $this->VIN . "<br>";
    }
    
    public function getVIN() {
        return $this->VIN;
    }
}

class Inventory {
    private $cars = [];
    
    function addCar($car) {
        $this->cars[] = $car;
    }

    function removeCar($VIN) {

    foreach ($this->cars as $index => $car) {
        if ($car->getVIN() === $VIN) {
            unset($this->cars[$index]);
            $this->cars = array_values($this->cars);
            echo "Car with VIN $VIN has been removed.<br>";
            
        }
    }
    }
    
    public function listCars() {
        foreach ($this->cars as $car) {
            echo $car->getDetails() . "<br>";
        }
    }
}

$car1 = new Car("car1", "Car1", "123");
$car2 = new Car("car2", "car2", "456");
$car3 = new Car("car3", "car3", "789");

$inventory = new Inventory();

$inventory->addCar($car1);
$inventory->addCar($car2);
$inventory->addCar($car3);

$inventory->listCars();
$inventory->removeCar("456");
$inventory->listCars();
?>
