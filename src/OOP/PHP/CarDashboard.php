<?php


namespace App\OOP\PHP;


class CarDashboard
{

    protected int $oilLevel;
    protected int $fuelLevel;
    protected int $airPressure;

    /**
     * @return mixed
     */
    private function getOilLevel()
    {
        return $this->oilLevel;
    }

    /**
     * @return mixed
     */
    private function getFuelLevel()
    {
        return $this->fuelLevel;
    }

    /**
     * @return mixed
     */
    private function getAirPressure()
    {
        return $this->airPressure;
    }

    public function getDashboard(){
        return "Fuel: {$this->getFuelLevel()} \n
                Oil: {$this->getOilLevel()} \n
                Air Pressure: {$this->getAirPressure()}";
    }



}