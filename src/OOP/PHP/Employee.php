<?php

namespace App\OOP\PHP;

class Employee
{

    private $name;
    private $age;
    private $salary;

    /**
     * Employee constructor.
     * @param $name
     * @param $age
     * @param $salary
     */
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }




}