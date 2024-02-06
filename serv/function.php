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

function factorial($n) {
  if ($n == 0 || $n == 1) {
      return 1;
  } else {
      return $n * factorial($n - 1);
  }
}

// Function to check if a number is palindromic
function isPalindrome($number) {
  $numberStr = strval($number);
  return $numberStr === strrev($numberStr);
}

// Function to check if a number is palindromic in base 2
function isBinaryPalindrome($number) {
  $binaryStr = decbin($number);
  return isPalindrome($binaryStr);
}

function sumName($name) {
  $char = str_split($name, 1);

  $val = 0;

  for ($i=0; $i < sizeof($char); $i++) {
      $val += (ord($char[$i]) - 64);
  }

  return $val;
}