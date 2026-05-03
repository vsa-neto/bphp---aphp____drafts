<?php
declare(strict_types=1);

class Teacher implements PersonInteface
{
    public function getGretting(string $name, string $surname) : string {
        return "Hello, teacher --- $name $surname";
    }
}