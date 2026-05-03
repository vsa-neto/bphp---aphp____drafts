<?php
declare(strict_types=1);

class Teacher extends AbstractPerson
{
    public function getHello() : string {
        return "Hello, teacher --- $this->name $this->surname";
    }
}