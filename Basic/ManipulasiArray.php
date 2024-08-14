<?php

//dot
$nama = "Fredy Dwi Saputra";

echo "Nama : " . $nama . PHP_EOL;
echo "Umur : " . 19 . "\n";

//konversi
$ValueString = (String) 100;
var_dump($ValueString);

$ValueInt = (int) "100";
var_dump($ValueInt);

$ValueFloat = (float) "1.09";
var_dump($ValueFloat);

//akses data

$nama = "Budi";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;

//Variabel parsing (Bisa kalo double quote dan heredoc aja)

$nama = "fredy";

echo "Hallo $nama, selamat kungkingkang" . "\n";

echo <<<FRED
Hallo $nama selamat belajar
\n
FRED;

//curly
$var = "fred";
echo "Nama saya {$var}y";
echo "\n";

//if
$nilai = 60;
$absen = 80;

if ($nilai >= 60 && $absen >= 80) {
    echo "anda lulus";
} else if ($nilai == 60) {
    echo "nilai anda ngepas";
} else {
    echo "maaf anda tidak lulus";
}
echo PHP_EOL;

//if alternatif (pake titik dua [elseif harus digabung jangan di spasi] dan dibelakang nya dikasih endif;)
$nilai = 50;
$absen = 80;

if ($nilai >= 60 && $absen >= 80):
    echo "anda lulus";
elseif ($nilai == 60):
    echo "nilai anda ngepas";
else:
    echo "maaf anda tidak lulus";
endif;

