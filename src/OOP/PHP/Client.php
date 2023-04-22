<?php

namespace App\OOP\PHP;

class Client
{


    protected string $source;
    protected int $timeout;

    /**
     * @param string $source
     * @param int $timeout
     */
    public function __construct(string $source, int $timeout)
    {
        $this->source = $source;
        $this->timeout = $timeout;
    }


    public function connect(): string
    {
        return "I am connecting to {$this->source}";
    }

    public function call(string $url): string
    {
        return "I have fetch this data for you";
    }

    public function terminate(): bool
    {
        return true;
    }

    public function welcomeAfterConnection(): string
    {
        return "I have connected successfully to {$this->source}";
    }

}