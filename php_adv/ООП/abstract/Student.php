<?php
declare(strict_types=1);

class Student implements PersonInteface
{
   public function getGretting(string $name, string $surname) : string {
        return "Hello, student --- $name $surname";
    }
}

