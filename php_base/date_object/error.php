<?php
declare(strict_types=1);


error_reporting(E_ERROR | E_WARNING | E_PARSE);

set_error_handler(
    function(int $errno, string $errstr): bool {
        echo "это перехваченная ошибка номер $errno, с текстом $errstr". PHP_EOL;
        return true;
    }
);

echo $a;

if (isset($a)){
echo "переменная $a существут".PHP_EOL;
} else {
    echo "переменная не существует". PHP_EOL;
}


var_dump(E_ERROR);


phpinfo();
