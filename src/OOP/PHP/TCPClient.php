<?php

namespace App\OOP\PHP;

class TCPClient extends Client
{
    public int $portNumber;

    /**
     * @param int $portNumber
     */
    public function __construct(string $source, int $timeout, int $portNumber)
    {
        Client::__construct($source, $timeout);
        $this->portNumber = $portNumber;
    }

    public function welcomeAfterConnection(): string
    {
        return "I have connected successfully to {$this->source}";
    }



}