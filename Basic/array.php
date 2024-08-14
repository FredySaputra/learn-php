<?php

$names = ["fredy", 1];
$names[0] = "kuking";
unset($names[1]);
var_dump($names);
echo "\n";

$fredy = [
    "id" => 112,
    "nama" => "Fredy",
    "umur" => 19,
    "alamat" => [
        "kota" => "Jakarta",
        "kelurahan" => "grogol selatan",
    ]
];

var_dump($fredy["alamat"]["kota"]);
