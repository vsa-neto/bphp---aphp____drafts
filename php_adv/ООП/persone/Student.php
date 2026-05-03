<?php
declare(strict_types=1);

class Student extends Person
{
    public function getGreeting() : string {
        return "Hello, student $this->name $this->surname";
    }
}

