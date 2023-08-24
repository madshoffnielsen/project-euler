<?php

for ($a = 0; $a < 500; $a++) {
    for ($b = 0; $b < 500; $b++) {
        for ($c = 0; $c < 500; $c++) {
            if (1000 === ($a + $b + $c) && (pow($a, 2) + pow($b, 2)) == pow($c, 2)) {
                echo $a * $b * $c;
                return;
            }
        }
    }
}