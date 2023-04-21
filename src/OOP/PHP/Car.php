<?php


namespace App\OOP\PHP;


abstract class Car
{

    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearboxSystem;
    protected string $color;
    protected bool $turnedOn = false;

    private Cardashboard $dashboard;

    /**
     * Car constructor.
     * @param $speed
     * @param $numberOfDoors
     * @param $gearboxSystem
     * @param $color
     */
    public function __construct($speed, $numberOfDoors, $gearboxSystem, $color)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearboxSystem = $gearboxSystem;
        $this->color = $color;
    }


    public abstract function move();

    public abstract function turnOn();

    public abstract function turnOff();

    public abstract function accelerate($speed);

    public abstract function park();

    public function installDashboard($dashboard)
    {
        $this->dashboard = $dashboard;
    }

    public function carInfo()
    {
        if ($this->dashboard)
            return "The speed is {$this->speed} \n More info ... \n {$this->dashboard->getDashboard()}";
        else
            return "The speed is {$this->speed}";
    }

}