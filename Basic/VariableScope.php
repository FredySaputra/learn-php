<?php

function increment()
{
    /**
     * Jika menggunakan kata "static"  sebelum variabel, maka nilai variable
     * akan mengambil nilai dari penggunaan fungsi sebelumnya
     */
    static $counter =1;

    echo "Counter : $counter".PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
increment();
increment();

