<?php
/**
 * Given an integer N (> 0), compute N2 by means of the formula
N2 = 1 + 3 + 5 + … + (2·N − 1).
 */
$sum = 0;
$b = 50;
for ( $x = 1 ; $x < $b ; $x = $x + 2) {
    $sum += $x ;
}
var_dump($sum);