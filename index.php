<?php
require "./vendor/autoload.php";

$a = [
    123,
    234.2342,
    23.123
];
$b = Chelp\Bc::add($a, 3);
echo $b;
