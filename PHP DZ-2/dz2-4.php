<?php
function mathOperation($arg1, $arg2, $operation){
  switch ('multiplay'){
    case 'add':
      return $arg1 + $arg2;
      break;
    case 'devide':
      return $arg1 / $arg2;
      break;
    case 'multiplay':
      return $arg1 * $arg2;
      break;
    case 'subtract':
      return $arg1 - $arg2;
      break;
  }
}
echo mathOperation(12,14,'multiplay');
