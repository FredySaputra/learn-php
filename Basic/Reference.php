<?php

$name  = "Fredy";

$other = &$name;
$other = "Dwi";

echo "$name" . PHP_EOL;


function plus(int &$value)
{
    $value++;
}

$counter = 1;
plus($counter);

echo $counter . PHP_EOL;

function &getValue():int
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();

echo $b .PHP_EOL;
