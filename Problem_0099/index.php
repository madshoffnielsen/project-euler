<?php

$row = 0;
$max = gmp_init(0);
$max_row = 0;

$handle = fopen("0099_base_exp.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $row++;

        $base_exp = explode(',', $line);

        $gmp = gmp_pow($base_exp[0], $base_exp[1]);

        if ($gmp > $max) {
            $max = $gmp;
            $max_row = $row;
        }
    }

    fclose($handle);
}

echo $max_row;