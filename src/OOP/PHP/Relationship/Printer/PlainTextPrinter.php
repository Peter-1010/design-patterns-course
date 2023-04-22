<?php

namespace App\OOP\PHP\Relationship\Printer;

class PlainTextPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "This is a plain text format of string: {$this->stringToBePrinted}";
    }
}