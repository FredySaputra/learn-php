<?php
//GLOBAL
$name = "Fredy";

function sayName(){
    //VARIABEL LOKAL
    //gunakan kata 'global' untuk mengakses variabel global
    global $name;
    echo "$name".PHP_EOL;

    //bisa juga mengetik {$GLOBALS['nama variabel']}
    echo "{$GLOBALS['name']}".PHP_EOL;
}

sayName();