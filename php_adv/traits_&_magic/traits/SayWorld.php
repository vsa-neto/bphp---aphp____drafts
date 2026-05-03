<?php

declare(strict_types=1);

trait SayWorld
{
    public function sayHello(): string
    {
        return $this->getRandomHello();
    }

    private function getRandomHello() : string
    {
        $randomNumber = rand();
        return "Hello, random - $randomNumber";
    }
}
