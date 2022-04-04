<?php
require_once 'Highway.php';

final class MotorWay extends Highway
{
    public function __construct(array $currentVehicles, int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
            return "+1";
        }else{
            return "You can't add a vehicle on a pedestrian way";
        }
    }
}