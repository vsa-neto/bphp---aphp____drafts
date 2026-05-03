<?php

declare(strict_types=1);

function inverse(int $x): float
{
    if ($x === 0) {
        // throw new Exception('-- нельзя делить на ноль--');
        throw new LogicException ('-- нельзя делить на ноль--'); // библиотека исключений SPL
    }
    return 1600 / $x;
}

try {
    echo inverse(0). PHP_EOL;
} catch (Exception $e) {
    echo "Ошибка: {$e->getMessage()} / {$e->getCode()}";
} 

echo "--------------------------------". PHP_EOL;




function func(int $x): float {
    return 1600 / $x;
}

try {
    echo func(0). PHP_EOL;
} catch (DivisionByZeroError $e) {
    echo "Ошибка деления на ноль: {$e->getMessage()} / {$e->getCode()} / {$e->getLine()}";
} catch (ArithmeticError $e) {
    echo "Другая математическая ошибка: {$e->getMessage()} / {$e->getCode()} / {$e->getLine()}";
}