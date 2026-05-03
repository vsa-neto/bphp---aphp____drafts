<?php
declare(strict_types=1);

class Student extends AbstractPerson
{
    public function getHello() : string {
        return "Hello, student --- $this->name $this->surname";
    }
}

