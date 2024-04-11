<?php

// Function to calculate the sum of fifth powers of digits
function sumOfFifthPowers($number) {
    $sum = 0;
    $digits = str_split((string)$number);
    foreach ($digits as $digit) {
        $sum += pow($digit, 5);
    }
    return $sum;
}

// Upper limit for the search (empirically found)
$upperLimit = 354294; // 6 * 9^5

// Sum of numbers that can be written as the sum of fifth powers of their digits
$totalSum = 0;

// Iterate through numbers from 2 to the upper limit
for ($i = 2; $i <= $upperLimit; $i++) {
    // Check if the number is equal to the sum of its fifth powers of digits
    if ($i === sumOfFifthPowers($i)) {
        $totalSum += $i;
    }
}

// Output the result
echo "The sum of all the numbers that can be written as the sum of fifth powers of their digits is: $totalSum";
?>
