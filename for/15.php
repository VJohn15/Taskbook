<?php
/**
 * Given a real number A and an integer N (> 0), find A raised to the power N (i. e., the product of N values of A):
AN = A·A· … ·A.
 */
$sum = 1;
$a = 2;
$b = 10;
for ( $x = $a ; $x <= $b ; $x ++) {
    $sum =  pow($a,$b);
}
var_dump($sum);