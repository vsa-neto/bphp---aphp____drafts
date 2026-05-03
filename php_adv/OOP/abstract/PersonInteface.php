<?php

declare(strict_types=1);

interface PersonInteface
{
    public function getGretting(string $name, string $surname): string;
}
