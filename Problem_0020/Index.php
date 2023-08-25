<?php

$gmp = gmp_fact(100);

echo array_sum(str_split(gmp_strval($gmp), 1));