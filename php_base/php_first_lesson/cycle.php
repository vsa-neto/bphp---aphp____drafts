#!/c/PHP/php

<?php

// вариант 1

for ($i = 0; $i < $argc; $i++) {
    echo "Аргумент под номером $i равен $argv[$i]" . PHP_EOL;
}

// вариант 2

$i = 0;

for ( ; $i < $argc;) {
    echo "Аргумент под номером $i равен $argv[$i]" . PHP_EOL;
    $i++;
}

$fruits = [
    "яблоко" => "дереве",
    "ананас" => "кусте",
    "персик" => "дереве",
    "манго" => "дереве",
];



foreach($fruits as $fruit => $where) {
    echo "$fruit растет на $where" . PHP_EOL;
}

// альтернатива foreach с циклом for:

for ($i = 0; $i < count($fruits); $i++) {
    echo 
        array_keys($fruits)[$i] . 
        " растет на " . 
        array_values($fruits)[$i] . 
        PHP_EOL;
}

echo PHP_EOL;

$j = 0;
while ($j < 3) {
    echo "напечатана строка № $j" . PHP_EOL;
    $j++;
}

$f = 0;
do {
    echo "напечатана строка № $f" . PHP_EOL;
    $f++;
} while ($f < 3);

echo PHP_EOL;
// альтернатива while с циклом for:

$k = 0;
for (; $k < 3;) {
    echo "напечатана строка № $k" . PHP_EOL;
    $k++;
}


$count_1 = 1;
$num = 3;
$max = 30;

while (true){ //  <-- бесконечный цикл
    if ($num ** $count_1 > $max) {
        break;
    }
    $count_1++;
}
$result = $num ** ($count_1 - 1);
echo "Расcчитанное число = $result" . PHP_EOL;

// пропуск итерации "continue"

$names = [ "Иван", "", "Павел", "Артем"];

foreach ($names as $name) {
   if ($name === "") {
    continue;
   } echo "Привет $name!" . PHP_EOL;
}