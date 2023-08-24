<?php

$first = 0;
$second = 0;

$biggest = 0;

for ($i=0; $i < 1000; $i++) {
    for ($j=0; $j < 1000; $j++) {
        $calc = $i * $j;
        if (strrev($calc) == $calc) {
            if ($calc > $biggest) {
                $biggest = $calc;
            }
        }
    }
}

echo $biggest;