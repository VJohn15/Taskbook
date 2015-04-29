<?php
/**
 * A real number A and an integer N (> 0) are given. Using one loop-statement compute the expression
1 − A + A2 − A3 + … + (−1)N·AN.
 */
$sum = 0;
$b = 5;
for ( $x = 1; $x < $b ; $x ++){
    if (is_integer($x / 2)) {
        $sum = 1- $b + pow( $b,$x);
    }
    elseif ( !is_integer( $x / 2)) {
        $sum = 1 - $b - pow($b ,$x);
    }
}
var_dump($sum);