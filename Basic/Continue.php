<?php

$i = 0;

for($i=1; $i <=10;$i++){

    
    if($i % 2 == 0){
        continue;
    }

    echo "ini bilangan ganjil ke-$i".   PHP_EOL;

}