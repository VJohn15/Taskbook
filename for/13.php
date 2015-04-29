<?php
/**
 *  Given an integer N (> 0), find the value of the following expression of N terms with alternating signs:
1.1 − 1.2 + 1.3 − … .
 */
$sum = 0;
$b = 5;
for ( $x = 1.1 ; $x < $b ; $x = $x + 0.1) {
       if ( is_integer($x / 0.2)){
           $sum = $sum - $x ;
       } elseif ( !is_integer( $x / 0.2)){
           $sum = $sum + $x ;
       }
}
var_dump($sum);