<?php
include "../serv/function.php";

$totalSum = 0;

// Iterate through numbers less than one million
for ($i = 1; $i < 1000000; $i++) {
    if (isPalindrome($i) && isBinaryPalindrome($i)) {
        $totalSum += $i;
    }
}

// Output the result
echo $totalSum;
