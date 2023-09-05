<?php

$max = 1;

for ($a=1; $a < 100; $a++) {
    for ($b=1; $b < 100; $b++) {
        $digits = str_split(gmp_strval(gmp_pow($a, $b)), 1);

        $tmp = 0;
        foreach($digits as $digit) {
            $tmp += $digit;
        }

        if ($tmp > $max) {
            $max = $tmp;
        }
    }
}

echo $max;