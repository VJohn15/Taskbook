<?php
/**
 * Given an integer N (> 0) that equals 2 raised to some integer power: N = 2K, find the exponent K of the power.
 */
$n = 16;
const a = 2;
while ( $n >= a){
    if ( pow(a , 1)== $n){
        echo 'Power of number 2 is 1 <br/>';
    }
      if (pow(a,2) == $n){
        echo 'Power of number 2 is 2 <br/>';
    }  if (pow(a,3)== $n){
        echo 'Power of number 2 is 3 <br/>';
    } if (pow(a,4)==$n){
        echo 'Power of number 2 is 4 <br/>';
    } if (pow(a,5)==$n) {
        echo 'Power of number 2 is 5 <br/>';
    } break;
}