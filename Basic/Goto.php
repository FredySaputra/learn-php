<?php
// kode "Hello world!" tidak dibaca, karena langsung lompat ke "Hello A"

goto a;
echo "Hello World!";

a:
echo"Hello A";

echo    PHP_EOL;

$i = 1;

for($i = 1; $i<=10; $i++){

    echo"ini adalah perulangan ke-$i" . PHP_EOL;

    if($i >10){
        goto end;
    }
}

end:
echo "end of line";