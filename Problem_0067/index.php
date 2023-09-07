<?php

$triangle = [];

$handle = fopen("0067_triangle.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $triangle[] = explode(' ', $line);
    }

    fclose($handle);
}

function findMaxPathSum($triangle) {
    for ($i = count($triangle) - 2; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++) {
            $triangle[$i][$j] += max($triangle[$i + 1][$j], $triangle[$i + 1][$j + 1]);
        }
    }
    return $triangle[0][0];
}

$maxSum = findMaxPathSum($triangle);
echo $maxSum;