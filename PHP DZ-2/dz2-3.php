<?php
function sum($arg1, $arg2){
  return $arg1 + $arg2;
}
function subtract($arg1, $arg2){
  return $arg1 - $arg2;
}
function divide($arg1, $arg2){
  return $arg1 / $arg2;
}
function multiply($arg1, $arg2){
 return $arg1 * $arg2;
}
echo sum(11, 22) . PHP_EOL;
echo subtract(44, 12) . PHP_EOL;
echo divide(60, 20) . PHP_EOL;
echo multiply(11, 11);