<?php

$names = ["Fredy", "Dwi", "Saputra"];

for ($i = 0; $i < count($names); $i++) {

    echo "$names[$i]" . PHP_EOL;
}

echo PHP_EOL;

foreach ($names as $name) {
    echo "$name" . PHP_EOL;
}

$person = [
    "firstname" => "Fredy",
    "middlename" => "Dwi",
    "lastname" => "Saputra"
];

echo PHP_EOL;

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}