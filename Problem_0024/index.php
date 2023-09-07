<?php

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function findNthPermutation($n) {
    $result = '';
    $n--;
    $available = range(0, 9);

    for ($i = count($available) - 1; $i >= 0; $i--) {
        $fact = factorial($i);
        $index = (int)($n / $fact);
        $result .= $available[$index];
        array_splice($available, $index, 1);
        $n %= $fact;
    }

    return $result;
}

echo findNthPermutation(1000000);