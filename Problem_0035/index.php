<?php

// Function to check if a number is prime
function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Function to generate all rotations of a number
function generateRotations($number) {
    $numberStr = (string)$number;
    $rotations = [];
    $length = strlen($numberStr);
    for ($i = 0; $i < $length; $i++) {
        $rotatedNumber = substr($numberStr, $i) . substr($numberStr, 0, $i);
        $rotations[] = (int)$rotatedNumber;
    }
    return $rotations;
}

// Count of circular primes
$count = 0;

// Generate primes below one million
for ($i = 2; $i < 1000000; $i++) {
    if (isPrime($i)) {
        $rotations = generateRotations($i);
        $allPrimes = true;
        foreach ($rotations as $rotation) {
            if (!isPrime($rotation)) {
                $allPrimes = false;
                break;
            }
        }
        if ($allPrimes) {
            $count++;
        }
    }
}

// Output the result
echo "The number of circular primes below one million is: $count";
?>
