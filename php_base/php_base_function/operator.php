<?php
var_dump(+'123');

var_dump('123456');


var_dump(5-6);
var_dump(6/3);
var_dump(round(5/3, 3));

echo PHP_EOL;
var_dump(gettype(round(5/3, 3)));
var_dump(gettype(6/3));
var_dump(gettype([]));
var_dump(2**3);
echo PHP_EOL;

$a = 5;
echo ++$a . PHP_EOL;
echo $a++ . PHP_EOL;
echo $a++ . PHP_EOL;
echo $a . PHP_EOL;

$a += 100;
$a .= " $";
echo $a . PHP_EOL;

$b = 'VTB ';

$result = "на карте ${b} ${a}";
echo $result . PHP_EOL;

$a = ($c = 15) + 50;
$a += 5;
echo $a . PHP_EOL;

// оператор исполнения не работает в vs-code
echo shell_exec('ls'); 
echo `ls`; 


//---------------------------------------------------------
var_dump(true && false);

// исключающее или "XOR" = должно быть только одно значение
var_dump(true xor false);




