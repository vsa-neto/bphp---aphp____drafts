<?php
declare(strict_types=1);


// $date = date_create_from_format('j-M-Y', '1-jun-2025' );
// $date = DateTime::createFromFormat('j-M-Y', '1-jun-2025' );
$date = new DateTime(); 


// :: оператор разрешения области видимоссти позволяет обращаться к:
//  1)  статическим свойствам
//  2)  константам
//  3)  свойствам или методам класса

// var_dump($date);
// echo $date->format('d-M-Y').PHP_EOL;
// $date->modify('+9 week');
// echo $date->format('d-M-Y').PHP_EOL;

// echo date_format($date, 'd-m-Y'). PHP_EOL;
// date_modify($date, '+10 day');
// echo date_format($date, 'D-M-Y'). PHP_EOL;
// date_modify($date, '+20 day');
// echo date_format($date, 'd-m-Y'). PHP_EOL;

// echo "Hello!";

// var_dump(date('N-d-m-Y'));
// $myDate = date('[ N ] d.m.Y');
// echo $myDate;

$time = date('Y d-M', time() + 60 * 60 * 24 * 3);
echo $time. PHP_EOL;

$time = date('Y d-M', strtotime('+1 week'));
echo $time. PHP_EOL;

echo date_format($date, 'd-m-Y'). PHP_EOL;
date_modify($date, '+2 month');
echo date_format($date, 'd-m-Y'). PHP_EOL;
