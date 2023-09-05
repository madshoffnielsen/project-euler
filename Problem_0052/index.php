<?php

$x = 0;

do {
    $x++;

    $x2 = str_split($x * 2, 1);
    $x3 = str_split($x * 3, 1);
    $x4 = str_split($x * 4, 1);
    $x5 = str_split($x * 5, 1);
    $x6 = str_split($x * 6, 1);

    sort($x2);
    sort($x3);
    sort($x4);
    sort($x5);
    sort($x6);
}
while (!($x2 == $x3 && $x2 == $x4 && $x2 == $x5 && $x2 == $x6));

echo $x;