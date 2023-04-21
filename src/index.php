<?php

use App\OOP\PHP\Employee;

require_once __DIR__ . '/../vendor/autoload.php';



$peter = new Employee('Peter Anwer', 19, 5000);

var_dump($peter);