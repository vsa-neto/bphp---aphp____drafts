<?php
declare(strict_types=1);

require_once 'autoload.php'; 

$person[] = new Student('Денис', 'Денисов');
$person[] = new Teacher('Andrey', 'Andreev');

foreach($person as $item) {
    if($item instanceof PersonInteface){
        echo ($item->getGretting('SomeName', 'SomeSurname'));
        echo PHP_EOL;
    }
}