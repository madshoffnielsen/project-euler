<?php
include "../serv/function.php";

$count = 0;
$number = 1;

while (true) {
    if (checkprime($number)) {
        $count++;
        if ($count == 10001) {
            echo $number;
            break;
        }
    }
    $number++;
}

