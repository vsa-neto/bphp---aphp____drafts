<?php

declare(strict_types=1);

require_once 'autoload.php';
// require_once './traits/SayWorld.php';

$user = new CheckUser();

echo ($user->login("user_M1", 1234));

