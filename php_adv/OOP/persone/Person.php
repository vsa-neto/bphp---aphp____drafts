<?php
declare(strict_types=1);

class Person
{
    protected string $name;
    protected string $surname;
    private int $uid;

    public function __construct( string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->uid = rand();
    }

        public function getGreeting() : string {
        return "Hello, person $this->name $this->surname";
    }
}