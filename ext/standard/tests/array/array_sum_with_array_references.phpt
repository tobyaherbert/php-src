--TEST--
Test array_sum() function : array with array references
--FILE--
<?php
  $value = array(10, array(20), 30);
  next($value[1]);
  echo array_sum($value);
?>
--EXPECT--
40
