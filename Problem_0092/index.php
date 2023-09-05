<?php

$count = 0;

for ($i=1; $i < 10000000; $i++) {
    $current = $i;
    do {
        $number = 0;

        foreach (str_split($current, 1) as $digit) {
            $number += pow($digit, 2);
        }
        $current = $number;
    }
    while ($number != 1 && $number != 89);

    if ($number == 89) {
        $count++;
    }
}

echo $count;