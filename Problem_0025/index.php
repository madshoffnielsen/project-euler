<?php

$f1 = gmp_init(1);
$f2 = gmp_init(1);
$count = 2;

while (strlen(gmp_strval($f2)) < 1000) {
    $count++;
    $tmp = gmp_add($f1, $f2);
    $f1 = $f2;
    $f2 = $tmp;
}

echo $count;