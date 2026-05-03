<?php
declare(strict_types=1);

session_start ();

$name = 'testCookie';
$value = 'value_of_cookie';

// setcookie($name, $value, time() + 10);
setcookie("cookie[one]", "one-1", time() + 3600);
setcookie("cookie[two]", "two-2", time() + 3600);
setcookie("cookie[three]", "three-3", time() + 3600);

var_dump($_COOKIE);

echo str_repeat("<br/>", 4);

foreach($_COOKIE['cookie']??[]
as $name => $value){
    echo "$name : $value <br/>";
}

print_r ($_SESSION);


// echo "<h1>Hello!</h1>";
// echo "<h1>Hello!</h1>";

// Session id

