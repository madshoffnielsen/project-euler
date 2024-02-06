<?php
include "../serv/function.php";

// Find the upper limit for the search
$maxDigits = 2; // As 2! = 2, so we start from 3
$upperLimit = factorial(9); // The maximum possible sum for 9

$totalSum = 0;
for ($i = 3; $i <= $upperLimit; $i++) {
    $sum = 0;
    $digits = str_split($i);
    foreach ($digits as $digit) {
        $sum += factorial($digit);
    }
    if ($sum == $i) {
        $totalSum += $i;
    }
}

echo $totalSum;
