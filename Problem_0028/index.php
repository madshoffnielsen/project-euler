<?php

function sumSpiralDiagonals($n) {
    if ($n % 2 == 0) {
        return 0;
    }

    $sum = 1;
    $currentValue = 1;

    for ($i = 3; $i <= $n; $i += 2) {
        for ($j = 0; $j < 4; $j++) {
            $currentValue += $i - 1;
            $sum += $currentValue;
        }
    }

    return $sum;
}

$n = 1001;
$diagonalsSum = sumSpiralDiagonals($n);

echo $diagonalsSum;