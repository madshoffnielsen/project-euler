<?php

function getTriangleNumberWithDivisors($minDivisors) {
    $n = 1;
    $triangleNumber = 1;

    while (true) {
        $n++;
        $triangleNumber += $n;

        // Calculate the number of divisors
        $count = 0;

        for ($i = 1; $i <= sqrt($triangleNumber); $i++) {
            if ($triangleNumber % $i === 0) {
                $count += 2; // Increment for both factors (i and triangleNumber / i)
            }
        }

        // If the number of divisors is greater than or equal to $minDivisors, return the triangle number
        if ($count >= $minDivisors) {
            return $triangleNumber;
        }
    }
}

$minDivisors = 500;
$result = getTriangleNumberWithDivisors($minDivisors);
echo $result;