<?php
/**
 *  Given two integers A and B (A < B), find the sum of squares of all integers in the range A to B inclusive.
 */
$sum = 0;
$a = 3;
$b = 5;
for ( $x = $a ; $x <= $b ; $x ++) {
      $sum = $sum + pow($x,2);
}
var_dump($sum);