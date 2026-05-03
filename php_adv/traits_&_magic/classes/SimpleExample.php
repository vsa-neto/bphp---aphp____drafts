<?php

declare(strict_types=1);

class SimpleExample
{
    private string $importantValue;
  

    public function __construct(string $importantValue)
    {
        $this->importantValue = $importantValue;
    }

    public function __toString()
    {
        return $this->importantValue;
    }
}