<?php


namespace App\OOP\PHP;


class Order
{
    private $source;
    private $destination;
    private $weight;

    /**
     * Order constructor.
     * @param $source
     * @param $destination
     * @param $weight
     */
    public function __construct($source, $destination, $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }

    public function deliverOrder(Car $car)
    {
        $car->turnOn();
        $car->move();
        $car->accelerate(120);
        $car->park();
        $car->turnOff();

        if ($car instanceof WeightHolder){
            $car->leftCargo();
        }

        return "I am moving from {$this->source} to {$this->destination} to deliver a package of {$this->weight} KG";
    }

}