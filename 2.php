<?php
$a = 0;
do {
  if($a == 0){
    echo $a . ' - это ноль.' . PHP_EOL;
    $a++;
  } else if($a % 2 !==0){
    echo $a . ' - это нечетное число.' . PHP_EOL;
    $a++;
  } else if($a % 2 ==0){
    echo $a . ' - это четное число.' . PHP_EOL;
    $a++;
  }
} while($a < 11);
