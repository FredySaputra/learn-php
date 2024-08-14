<?php

echo "Hasil penulisan formal" . PHP_EOL;
$i = 1;
while ($i <= 3) {
    echo "ini adalah perulangan While ke-$i" . PHP_EOL;
    $i++;
}

echo PHP_EOL . "Sementara ini adalah hasil alternative-nya" . PHP_EOL;
//alternative
$i = 1;
while ($i <= 3):
    echo "ini adalah perulangan While ke-$i" . PHP_EOL;
    $i++;
endwhile;