<?php

$gmp = gmp_init(0);

for ($i=1; $i <= 1000; $i++) {
    $gmp = gmp_add($gmp, gmp_pow($i, $i));
}

echo gmp_strval($gmp);