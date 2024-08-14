<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(array_map(fn($values) => $values * 10, $data));

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "firstName" => "Fredy",
    "middleName" => "Dwi",
    "lastName" => "Saputra",
];

var_dump(array_keys($person));
var_dump(array_values($person));
