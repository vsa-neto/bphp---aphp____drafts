<?php


//   \      - экранирование
//   ^      - начало строки
//   $      - конец строки
//   .      - любой символ
//   [...]  - набор символов
//   (...)  - маска
//   ?      - 0 или 1 одно вхождение, смена "жадность" квантификатора
//   *      - 0 или более вхождений
//   +      - 1 или более вхождений
//   {2, 3} - количественный квантификатор (повторение  от 2 до 3)



//   \d     - любая цифра [0-9] 
//   \D     - любой нечисловой символ [^0-9]  // [^] - значит отрицание

//   \s     - любой символ пробела
//   \S     - любой не пробельный символ

//   \w     - эквивалент [a-zA-Z0-9_]
//   \W     - эквивалент [^a-zA-Z0-9_]

$string = 'My emails are v.s.work@yandex.ru and other email v.s.home@gmail.com';
// $pattern = '/^(\w+)@(\w+)\.(ru|com|pro)/';
$pattern = '/(\S+@)(\w+)\.(ru|com|pro)/';

// $result = preg_match_all($pattern, $string, $matches );
$result = preg_match_all($pattern, $string, $matches );
var_dump($result);
var_dump($matches[1]);

echo PHP_EOL;


$sting2 = 'My emails are andrey@infostorm.pro and andrey@gmail.com';
$pattern2 = '/(\w+)@(\w+)\.(ru|com|pro)/';
// $replace = '$2@$1.$3';
$replace = 'ivan@$2.$3';

$result2 = preg_replace($pattern2, $replace, $sting2);
var_dump($result2);

echo PHP_EOL;
echo PHP_EOL;

// HomeWork_function:
$var1 = mb_ucfirst(mb_strtolower(readline("Введите Имя: ")));
$var2 = mb_ucfirst(mb_strtolower(readline("Введите Фамилия: ")));
$var3 = mb_ucfirst(mb_strtolower(readline("Введите Отчество: ")));

$fullName = "Полное имя: '$var2 $var1 $var3'";
$fio = "Фамилия и инициалы: '". $var2." ". mb_substr($var1, 0, 1) .".". mb_substr($var3, 0, 1). ".'";
$surnameAndInitials =  "Аббревиатура: ". mb_substr($var2, 0, 1) . mb_substr($var1, 0, 1) . mb_substr($var3, 0, 1). "'";
   
echo PHP_EOL; 
echo $fullName.PHP_EOL;
echo $fio.PHP_EOL;
echo $surnameAndInitials.PHP_EOL;