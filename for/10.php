<?php
/**
 * Given an integer N (> 0), find the value of a following sum (as a real number):
1 + 1/2 + 1/3 + … + 1/N.
 */
$sum = 0;
$n = 50;
for ( $x = 1; $x < $n ; $x ++ ){
    $sum = $sum + 1/$x ;
}
var_dump($sum);