<?php
declare(strict_types=1);

class Teacher extends Person
{
    public function getGreeting() : string {
        return "Hello, teacher $this->name $this->surname";
    }
}