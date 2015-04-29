<?php
/**
 * Given an integer N (> 0), find the value of a following product:
N! = 1·2·…·N
 */
$prod = 1;
$n = 5;
for ( $x =1 ; $x <= $n ; $x++){
    $prod = $prod * $x ;
}
var_dump($prod);