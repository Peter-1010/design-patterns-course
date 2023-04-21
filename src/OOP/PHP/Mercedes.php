<?php


namespace App\OOP\PHP;


class Mercedes extends Car
{


    public function move()
    {
        return $this->speed * 2;
    }

    public function turnOn()
    {
        // two operations before turned on
        $this->turnedOn = true;
        return true;
    }

    public function turnOff()
    {
        // two operations before turned off
        $this->turnedOn = false;
        return true;
    }

    public function accelerate($speed)
    {
        $this->speed = $speed * 0.5 + 3;
        return true;
    }

    public function park()
    {
        // one operations before parking
        return true;
    }
}