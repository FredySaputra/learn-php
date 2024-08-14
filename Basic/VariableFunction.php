<?php

function foo()
{
    echo "foo".PHP_EOL;
}

function bar()
{
    echo "bar".PHP_EOL;
}

$namaVariable = "foo";
$namaVariable();

$namaVariable = "bar";
$namaVariable();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName". PHP_EOL;

}

function sampleFunction($name):string
{
    return "Sample $name".PHP_EOL;
}

sayHello("Fredy","sampleFunction");
sayHello("Fredy","strtoupper");
sayHello("Fredy","strtolower");