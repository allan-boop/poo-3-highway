<?php
require_once 'Highway.php';

final class ResidentialWay extends Highway
{
    public function __construct(array $currentVehicles, int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
            return "+1";
        }else{
            return "You can't add a vehicle on a residential way";
        }
    }
}