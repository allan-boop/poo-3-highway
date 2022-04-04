<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$pedestrianWay = new PedestrianWay([], 1, 10);
$motorWay = new MotorWay([], 4, 130);

$car = new Car('red', 5, 'electric');
$bicycle = new Bicycle('blue', 1);

echo $pedestrianWay->addVehicle($car);
echo $motorWay->addVehicle($car);


/*
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
*/
