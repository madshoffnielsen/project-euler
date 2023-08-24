<?php

$first = 1;
$second = 2;
$even_numbers = [];

while ($second < 4000000) {
    $tmp = $first + $second;
    if ($second % 2 == 0) {
        $even_numbers[] = $second;
    }
    $first = $second;
    $second = $tmp;
}

echo array_sum($even_numbers);