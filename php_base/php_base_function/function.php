<?php

// strpos (string $haystack, mixed $needle [, int $offset = 0]) : int;

$haystack = 'ищем иглу (ИГЛУ) в стоге сена, где есть несколько ИГЛ (игл)';

var_dump(mb_strpos($haystack, 'ИГЛ'));
var_dump(mb_stripos($haystack, 'ИГЛ'));
var_dump(mb_stripos($haystack, 'ИГЛ', 6));
var_dump(mb_stripos($haystack, 'ИГЛ', 10));
var_dump(mb_strrpos($haystack, 'ИГЛ'));
var_dump(mb_strripos($haystack, 'ИГЛ'));
var_dump(mb_stripos($haystack, 'булавка'));
var_dump(mb_stripos($haystack, 'ищем'));

echo PHP_EOL;
// сравнение строк
var_dump(strcmp('арбуз', 'банан'));
var_dump(strcmp('банан', 'банан'));
var_dump(strcmp('банан', 'арбуз'));
var_dump(strcmp('банан', 'Банан'));
echo PHP_EOL;
var_dump(strcasecmp('банан', 'Банан'));  // strcasecmp = без учета регистра не очень корректно работает с мультибайтовыми строками
var_dump(strcasecmp('banana', 'Banana'));  // strcasecmp = без учета регистра
echo PHP_EOL;
var_dump(strncmp('Banana green', 'Banana red', 6));  // сравнение первых 3-х символов
var_dump(strncmp('Banana green', 'Banana red', 8));

echo PHP_EOL;


$search =['скоро', 'ит', 'зима'];
$replace =['уже', 'ило', 'лето'];

$str = str_replace($search, $replace, 'скоро наступит зима');
echo $str;  // вернет "уже наступило лето"
echo PHP_EOL;

$replace2 = 'will end soon';
$str2 = substr_replace('winter is coming', $replace2, 7, 8 );  // substr_replace не работает с мультибайтовыми строками ( mb )
echo $str2;  // вернет "winter will end soon"
echo PHP_EOL;


// $str = substr_replace('скоро наступитзима', 'лето', 15, 4);
// echo $str;
// $str = substr_replace('winter is
// coming', 'will end soon', 7, 13);
// echo $str;
// $str = substr_replace('winter is
// coming', 'will end soon', 7);
// echo $str;


$var1 = readline("Введите Имя: ");
$var2 = readline("Введите Отчество: ");
$var3 = readline("Введите Фамилия: ");

echo "$var3 $var1 $var2";
