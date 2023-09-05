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


function collatzNumber($number) {
  if ($number % 2 == 0) {
      return $number / 2;
  }
  else {
      return ($number * 3) + 1;
  }
}

function sumName($name) {
  $char = str_split($name, 1);

  $val = 0;

  for ($i=0; $i < sizeof($char); $i++) {
      $val += (ord($char[$i]) - 64);
  }

  return $val;
}