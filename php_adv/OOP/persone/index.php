<?php
declare(strict_types=1);

// require_once 'Person.php';
// require_once 'Student.php';
// require_once 'Teacher.php'; 

require_once 'autoload.php'; 

$people[] = new Person('Ivan', 'Ivanov');
$people[] = new Student('Petr', 'Petrov');
$people[] = new Teacher('Andrey', 'Andreev');

foreach($people as $person) {
    if($person instanceof Person){
        echo ($person->getGreeting());
        echo PHP_EOL;
    }
}