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

$n1=600851475143;

for($i=1; $i <= ($n1/2); $i++) {
	if ($n1%$i == 0) {
        if (checkprime($i)) {
		    echo "$i\n" ;
        }
    }
}