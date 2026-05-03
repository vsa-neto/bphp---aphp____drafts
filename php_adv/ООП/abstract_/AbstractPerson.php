<?php

declare(strict_types=1);

abstract class AbstractPerson
{
    protected string $name;
    protected string $surname;
    private int $uid;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->uid = rand();
    }

    abstract public function getHello(): string;

    public function getId(): int
    {
        return $this->uid;
    }
}
