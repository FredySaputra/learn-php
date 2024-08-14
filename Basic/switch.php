<?php


//dengan kurung kurawal
$nilai = "C";

switch ($nilai) {
    case "A":
        echo "Nilai lu bagus bener" . PHP_EOL;
        break;
    case "B":
        echo "Not bad lah" . PHP_EOL;
        break;
    case "C":
        echo "Ngepas kocak" . PHP_EOL;
        break;
    default:
        echo "maaf anda tidak lulus" . PHP_EOL;
        break;
}

//tanpa kurawal tambahin end switch
$nilai = "A";

switch ($nilai):
    case "A":
        echo "Nilai lu bagus bener" . PHP_EOL;
        break;
    case "B":
        echo "Not bad lah" . PHP_EOL;
        break;
    case "C":
        echo "Ngepas kocak" . PHP_EOL;
        break;
    default:
        echo "maaf anda tidak lulus" . PHP_EOL;
        break;
endswitch;




