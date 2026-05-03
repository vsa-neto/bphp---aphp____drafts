<?php

$a = 5;
$b = 7.45;
$bool = true;

$arr = ['name', 'status', 'phone'];
$user = ['Ivan', 'student', '89313490'];



echo "hello" . PHP_EOL;
echo "Nik" . PHP_EOL;

echo "введите число";
$num = trim(fgets(STDIN));
echo "результат: " . $num * 4 . PHP_EOL;

echo "Название скрипта ". $argv[0] . PHP_EOL;
echo "Первый аргумент ". $argv[1] . PHP_EOL;
echo "Второй аргумент ". $argv[2] . PHP_EOL;

echo "Используется памяти сейчас: " . round(memory_get_usage()/1024) . "кб" . PHP_EOL;
echo "Пиковое использование памяти: " . round(memory_get_peak_usage()/1024) . "кб" . PHP_EOL;

$a = str_repeat("Hello",100000);

echo "Используется памяти сейчас: " . round(memory_get_usage()/1024) . "кб" . PHP_EOL;
echo "Пиковое использование памяти: " . round(memory_get_peak_usage()/1024) . "кб" . PHP_EOL;