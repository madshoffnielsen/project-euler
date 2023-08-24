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

$sum = 0;

for ($i=1; $i < 2000000; $i++) {
    if (checkprime($i)) {
        $sum += $i;
    }
}

echo $sum;