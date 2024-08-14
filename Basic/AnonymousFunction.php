<?php

$sayHello = function (string $name)
{
    echo "Hello $name".PHP_EOL;
};

$sayHello("Fredy");
$sayHello("Dwi");

function sayGoodBye(string $name,$filter)
{
    $finalName = $filter($name);
    echo "GoodBye $finalName".PHP_EOL;
}

sayGoodBye("Fredy", function($name):string
{
 return strtoupper($name);
});

$filterFunction = function($name):string
{
 return strtoupper($name);
};

sayGoodBye("Fredy", $filterFunction);


//mengakses variabel diluar function

$firstName = "Fredy";
$lastName = "Dwi";

//gunakan use (Parameter) , setelah penyebutan function pada anonymous function

$sayHelloFredy = function () use ($firstName,$lastName) :string
{
    return "Hello $firstName $lastName".PHP_EOL;
};

$sayHelloFredy();


