<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter,$name);
    echo "Hello $finalName" .PHP_EOL;
}

sayHello("Fredy", "strtoupper");
sayHello("Fredy", "strtolower");
sayHello("Fredy", function (string $name):string{
    return strtoupper($name);
} );
sayHello("Fredy", fn($name)=>strtoupper($name));