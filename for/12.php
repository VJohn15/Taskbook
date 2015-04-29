<?php
/**
 * Given an integer N (> 0), find the value of a following product of N factors:
1.1 · 1.2 · 1.3 · … .
 */
$prod = 1;
$n = 5;
for ( $x = 1.1; $x < $n ; $x = $x + 0.1){
    $prod = $prod * $x ;
}
var_dump($prod);