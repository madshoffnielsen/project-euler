<?php
include "../serv/function.php";

// Find all abundant numbers less than or equal to 28123
$abundantNumbers = [];
for ($i = 12; $i <= 28123; $i++) {
    if (sumOfDivisors($i) > $i) {
        $abundantNumbers[] = $i;
    }
}

// Create an array to represent whether each number can be expressed as the sum of two abundant numbers
$isSumOfTwoAbundant = array_fill(1, 28123, false);
foreach ($abundantNumbers as $num1) {
    foreach ($abundantNumbers as $num2) {
        $sum = $num1 + $num2;
        if ($sum <= 28123) {
            $isSumOfTwoAbundant[$sum] = true;
        } else {
            break;
        }
    }
}

// Sum up all numbers that cannot be expressed as the sum of two abundant numbers
$sum = 0;
for ($i = 1; $i <= 28123; $i++) {
    if (!$isSumOfTwoAbundant[$i]) {
        $sum += $i;
    }
}

// Output the result
echo $sum;
