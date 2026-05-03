<?php

declare(strict_types=1);

class User
{
    private string $login;
    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    public function getLogin(): string
    {
        return $this->login;
    }
}