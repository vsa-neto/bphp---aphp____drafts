<?php
$a = 5;
$b = 7.45;
$bool = true;

// echo $a. "\n";
// echo gettype($a + "15". 40);
// echo "\n";
// echo gettype($bool);
// echo "\n";
// echo $a + "5";
// echo "\n";
// echo ($a + $bool) . " - результат";
// echo "\n";
// print_r($bool);
// echo "\n";
// var_dump($bool);

if ($a < $b) {
    echo "a меньше b";
} elseif ($a === $b) {
    echo "a = b";
} else {
      echo "a больше b";
}
echo "\n";
echo "\n";

switch ($a) {
    case 1:
        echo "a = $a";
        break;
    default:
        echo "a = $a";
        break;
}

// объявление констант

define("CONSTANT", "константа" );

const CONST_2 = 7688577;
echo "\n";

echo CONSTANT."\n";
echo CONST_2."\n";

$arr = ['name', 'status', 'phone'];
$user = ['Ivan', 'student', '89313490'];

foreach($user as $item) {
    echo $item ."\n";
}

$res = match($a){
    1 => 'one',
    5 => 'five',
    default => 'default'
};
echo $res."\n";

$d = $bool ? 'yes' : "no";
echo $d."\n";
?>