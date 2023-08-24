<?php

$number = 0;
$devisable = false;

while(!$devisable) {
    $number++;
    for ($i=1; $i <= 20; $i++) {
        $devisable = true;
        if ($number%$i != 0) {
            $devisable = false;
            break;
        }
    }
}

echo $number;