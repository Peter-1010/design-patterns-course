<?php

namespace App\OOP\PHP\Relationship\Printer;

class HTMLPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "<h1>This is a HTML format of string: {$this->stringToBePrinted}</h1>";
    }
}