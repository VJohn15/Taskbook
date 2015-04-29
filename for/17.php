<?php
/**
 * A real number A and an integer N (> 0) are given. Using one loop-statement compute the sum
1 + A + A2 + A3 + … + AN.
 */
$sum = 1;
$a = 2;
$b = 10;
for ( $x = $a ; $x <= $b ; $x ++) {
    $sum = 1+ $a +  pow($a,$x);
}
var_dump($sum);