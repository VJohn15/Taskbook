<?php
/**
 *A real number X (|X| < 1) and an integer N (> 0) are given. Compute the expression
X − X2/2 + X3/3 − … + (−1)N−1·XN/N.
The result is an approximate value of ln(1 + X).
 */
$sum = 0;
$b = 5;
for ( $x = 2 ; $x < $b ; $x += 1) {
    if ( is_integer($x / 2)){
        $sum = $b - pow($b,$x)/$x;
    } elseif ( !is_integer( $x / 0.2)){
        $sum = $b + pow($b,$x)/$x ;
    }
}
var_dump($sum);