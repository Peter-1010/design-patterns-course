<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\PHP\Relationship\Teacher;
use App\OOP\PHP\Relationship\ScienceTeacher;
use App\OOP\PHP\Relationship\MathTeacher;
use App\OOP\PHP\Relationship\Student;
use App\OOP\PHP\Relationship\Printer\HTMLPrinter;

$mena = new ScienceTeacher("Mena Amen");
$peter = new MathTeacher("Peter Anwer");

//$printer = new HTMLPrinter();
//var_dump($peter->sayWelcome($printer));
//unset($peter);
//$printer->setStringToBePrinted("Test");
//var_dump($printer->printToScreen());

$poula = new Student("Poula Anwer");

$poula->assignATempTeacher($peter);
var_dump('Poula was assigned this by ' . $peter->getName() . ' | ' . $peter->evaluateStudentHomework($poula));
$poula->assignATempTeacher($mena);
var_dump('Poula was assigned this by ' . $mena->getName() . ' | ' . $peter->evaluateStudentHomework($poula));