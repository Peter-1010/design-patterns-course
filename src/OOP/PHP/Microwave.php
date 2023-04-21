<?php


namespace App\OOP\PHP;


class Microwave
{
    private $temp;
    private $program;
    private $time;
    private $status = false;

    /**
     * Microwave constructor.
     * @param $temp
     * @param $program
     * @param $time
     */
    public function __construct($temp, $program, $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function turnOn()
    {
        $this->status = true;
        return (boolean) true;
    }

    public function turnOff()
    {
        $this->status = false;
        return (boolean) true;
    }

    public function deFreeze()
    {
        $this->turnOnMicrowaveHeatingSystem();
        $this->loadingDeFreezingProgram();
        $this->setTimer();
        return "I am de-freeze the food at {$this->time} using the program {$this->program}";
    }

    private function turnOnMicrowaveHeatingSystem()
    {
        return "Starting on heating system";
    }

    private function loadingDeFreezingProgram()
    {
        return "Loading program {$this->program}";
    }

    private function setTimer()
    {
        return "Setting De-Freezing time to {$this->time} seconds";
    }

}