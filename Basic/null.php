<?php

$nama = "Fred";
$nama = null;

echo "is nama nul?";
var_dump(is_null($nama));

$contoh = "aku";
unset($contoh);

var_dump(isset($contoh));