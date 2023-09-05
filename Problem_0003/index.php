<?php
include "../serv/function.php";

$n1=600851475143;

for($i=1; $i <= ($n1/2); $i++) {
	if ($n1%$i == 0) {
        if (checkprime($i)) {
		    echo "$i\n" ;
        }
    }
}