<?php

declare(strict_types=1);

trait MobileUserAuthentication
{

private string $login = "user_M1";
private int $password = 1234;


public function authenticate(string $login, int $password): string | bool
{
    if($this->login === $login && $this->password === $password){
       return "$login авторизован как пользователь мобильного приложения";
    }else {
        return false;
    }
}

}
