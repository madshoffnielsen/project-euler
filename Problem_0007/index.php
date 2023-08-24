<?php

function checkprime($num) {
  if ($num == 1) {
    return false;
  }

  for ($i=2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
        return false;
    }
  }

  return true;
}

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

