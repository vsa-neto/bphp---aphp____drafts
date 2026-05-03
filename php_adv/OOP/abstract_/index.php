<?php
declare(strict_types=1);

require_once 'autoload.php'; 

$people[] = new Student('Денис', 'Денисов');
$people[] = new Teacher('Andrey', 'Andreev');

foreach($people as $person) {
    if($person instanceof AbstractPerson){
        echo ($person->getHello());
        echo PHP_EOL;
    }
}

echo "------------------". PHP_EOL;
foreach($people as $person) {
    if($person instanceof AbstractPerson){
        echo (($person->getHello())." [".($person->getId())."]");
        echo PHP_EOL;
    }
}