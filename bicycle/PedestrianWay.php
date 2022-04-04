<?php
require_once 'Highway.php';

final class PedestrianWay extends Highway
{
    public function __construct(array $currentVehicles, int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
            return "+1";
        }else{
            return "You can't add a vehicle on a pedestrian way";
        }
    }
}