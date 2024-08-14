<?php

/*
penggunaan manipulasi untuk tipe data string

join() / implode() = untuk memecah array menjadi string
explode = untuk memecah string menjadi array
trim = untuk menghapus whitespace pada kiri dan kanan / awal dan akhir 
substr = untuk mengambil sebagian data dari string yang dikirim
*/


var_dump(join(",", [1, 2, 3, 4, 5])); //menjadikan data tersebut menjadi string dengan separator koma ","
var_dump(explode(" ", "Fredy Dwi Saputra")); //untuk menjadikan 3 array yang dipisahkan dengan spasi
var_dump(trim("   Hello World   ")); //untuk menghilangkan spasi di awal dan akhir
var_dump(substr("2311500140", 0, 2)); //untuk mengambil data dari index ke 0 sampai 2