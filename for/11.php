<?php
/**
 * Given an integer N (> 0), find the value of a following sum (as an integer):
N2 + (N + 1)2 + (N + 2)2 + … + (2·N)2.
 */
$sum = 0;
$n = 50;
const a = 5;
for ( $x = 0; $x < a ; $x ++ ){
    $sum = $sum + (a + $x)*2 ;
}
var_dump($sum);