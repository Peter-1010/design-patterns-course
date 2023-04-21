<?php


namespace App\OOP\PHP;


class TruckXT extends Car implements WeightHolder
{


    public function move()
    {
        return $this->speed;
    }

    public function turnOn()
    {
        $this->turnedOn = true;
        return true;
    }

    public function turnOff()
    {
        $this->turnedOn = false;
        return true;
    }

    public function accelerate($speed)
    {
        $this->speed = $speed;
        return true;
    }

    public function park()
    {
        return true;
    }

    public function leftCargo()
    {
        return true;
    }
}