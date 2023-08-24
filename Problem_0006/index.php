<?php

$sum_squares = 0;
$sqares_sum = 0;

for ($i=1; $i <= 100; $i++) {
    $sum_squares += ($i * $i);
    $sqares_sum += $i;
}

$sqares_sum = $sqares_sum * $sqares_sum;

echo $sqares_sum - $sum_squares;