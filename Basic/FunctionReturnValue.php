<?php

function sum(int $first, int $last): int
{
    $total = $first + $last;
    return $total;
}
$result = sum(10,10);
var_dump($result);

$result = sum(100,100);
var_dump($result);

function finalScore(int $values): string
{
    if($values >= 90){
        return "A";
    }else if ($values >= 80){
        return "B";
    }else if ($values >= 70){
        return "C";
    }else if ($values >= 60){
        return "D";
    }else{
        return "E";
    }

    

}

$cek = finalScore(60);
var_dump($cek);