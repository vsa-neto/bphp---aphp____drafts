<?php

declare(strict_types=1);

require_once 'autoload.php';
require_once './traits/SayWorld.php';

$report = new ExampleReport();
$report->print();


$phone = new Phone();
$myPhone = new MyPhone();

echo PHP_EOL."---------------".PHP_EOL;
echo $phone->getName().PHP_EOL;
echo $myPhone->getName().PHP_EOL;
echo PHP_EOL."---------------".PHP_EOL;
echo $phone->getStaticName().PHP_EOL;
echo $myPhone->getStaticName().PHP_EOL;

echo PHP_EOL."---------------".PHP_EOL;
$user = new User('admin', '007');
$userAsString = serialize($user);

echo $userAsString.PHP_EOL;

$newUser = unserialize($userAsString);
echo $newUser->getLogin().PHP_EOL;


echo "---------------".PHP_EOL;
$class = new SimpleExample('Hello!');
echo $class;
echo "---------------".PHP_EOL;

$person = new Person('4', '6');
$person->setHello('test_1', 1);
Person::setHello('test_2', 2);

echo $person->userName;
$person->userName;
echo $person->userName = 'test';