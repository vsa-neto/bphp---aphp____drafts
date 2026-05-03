<?php
declare(strict_types=1);

// Настройка во время выполнения
// https://www.php.net/manual/ru/session.configuration.php#ini.session.auto-start


session_start ();
$_SESSION['param_one']='value_one';
$_SESSION['param_two']='value_two';

// определение количества посещений страницы с помощью сессии
$_SESSION['count'] = isset($_SESSION['count'])? ++$_SESSION['count'] : 0;
echo $_SESSION['count']."<br/><br/>";

// var_dump($_SESSION);


unset($_SESSION['param_one']);
echo "<h1>Hello!</h1>";
