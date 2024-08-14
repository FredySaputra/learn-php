<?php

$depan = [
    "depan" => "fredy"
];

$belakang = [
    "belakang" => "dwi saputra"
];

$full = $depan + $belakang;
var_dump($full);

$satu = [
    "depan" => "Fredy",
    "belakang" => "Dwi Saputra"
];

$dua = [
    "belakang" => "Dwi Saputra",
    "depan" => "Fredy",
];

var_dump($satu == $dua);
var_dump($satu === $dua);