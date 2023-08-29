<?php

$numbers = [];

for ($a=2; $a <= 100; $a++) {
    for ($b=2; $b <= 100; $b++) {
        $numbers[] = pow($a, $b);
    }
}

sort($numbers);
$numbers = array_unique($numbers);

echo count($numbers);