<?php


// SATU ARGUMEN DAN NILAI DEFAULT
// function sayHello($name = "Anonymous")
// {

//     echo "Hello $name".PHP_EOL;

// }

// sayHello("Fredy");
// sayHello();


//pemberian default di parameter pertama adalah sia-sia
function sayHello($firstName, $lastName = "")
{
    echo"Hello $firstName $lastName". PHP_EOL;
}

sayHello("Fredy");
sayHello("Fredy","Dwi");

function sum(int $first, int $last)
{

    $total = $first + $last;
    echo "Hasil  dari $first + $last = $total" . PHP_EOL;

}

sum(100,100);

//php bisa melakukan konversi otomatis dengan syarat harus sama sama numeric atau sama sama string
sum("100","100");
sum(true,false);

//php tidak bisa menambah array jika dibutuhkan integer
//sum([],[])

function sumAll(...$values)
{
    $total = 0;
    foreach($values as $value)
    {
        $total += $value;
    }

    echo "Total " . implode(",",$values) . " = " . $total . PHP_EOL;
}

    sumAll(1,2,3,4,5);

    //JIKA DIDAPATI ARRAY DAN INGIN MENGGUNAKAN FUNCTION, MAKA DIUBAH DENGAN CARA SEPERTI BERIKUT
    
    $values = [1,2,3,4,5];
    sumAll(...$values);