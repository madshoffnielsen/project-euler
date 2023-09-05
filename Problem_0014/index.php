<?php
include "../serv/function.php";

$longest = 0;
$longestNumber = 0;

for ($i=1; $i < 1000000; $i++) {
    $count = 1;
    $number = $i;
    while ($number > 1) {
        $number = collatzNumber($number);
        $count++;
    }

    if ($count > $longest) {
        $longest = $count;
        $longestNumber = $i;
    }
}

echo $longestNumber;