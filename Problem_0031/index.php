<?php

function countCoinCombinations($target) {
    $coins = array(1, 2, 5, 10, 20, 50, 100, 200);
    $ways = array_fill(0, $target + 1, 0);
    $ways[0] = 1;

    foreach ($coins as $coin) {
        for ($i = $coin; $i <= $target; $i++) {
            $ways[$i] += $ways[$i - $coin];
        }
    }

    return $ways[$target];
}

$targetAmount = 200; // £2 in pence
$combinations = countCoinCombinations($targetAmount);

echo $combinations;