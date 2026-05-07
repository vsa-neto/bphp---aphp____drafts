<?php

declare(strict_types=1);

class CheckUser {

 use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
     
        AppUserAuthentication::authenticate as authenticate;
        MobileUserAuthentication::authenticate as mAuthenticate;
    }

    // Метод, который проверяет оба способа авторизации
    public function login($login, $password) {
        echo "Попытка входа с логином: $login\n";
        
        // Пробуем веб-авторизацию
        $result = $this->authenticate($login, $password);
        if ($result) return $result;

        // Пробуем мобильную авторизацию
        $result = $this->mAuthenticate($login, $password);
        if ($result) return $result;

        return "Авторизация не удалась: Неверные данные.";
    }
}