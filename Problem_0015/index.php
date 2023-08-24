<?php

$k = 20;
$n = 20;

$paths = gmp_strval(gmp_fact($k + $n)) / (gmp_intval(gmp_fact($k)) *  gmp_intval(gmp_fact($n)));

echo $paths;