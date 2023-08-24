<?php

$number = gmp_strval(gmp_pow(2, 1000));

echo array_sum(str_split($number, 1));