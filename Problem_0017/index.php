<?php

$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
$f->setTextAttribute(NumberFormatter::DEFAULT_RULESET, "%spellout-numbering-verbose");

$sum = 0;

for ($i=1; $i <= 1000; $i++) {
    $sum += count(str_split(str_replace([" ", "-"], ["", ""], $f->format($i))), 1);
}

echo $sum;