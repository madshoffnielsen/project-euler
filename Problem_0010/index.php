<?php
include "../serv/function.php";

$sum = 0;

for ($i=1; $i < 2000000; $i++) {
    if (checkprime($i)) {
        $sum += $i;
    }
}

echo $sum;