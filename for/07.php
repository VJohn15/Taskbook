<?php
/**
 * Given two integers A and B (A < B), find the sum of all integers in the range A to B inclusive.
 */
$temp = 0;
$a = 10;
$b = 15;
for ( $i = $a ; $i < $b ; $i ++){
    $temp += $i;
}
echo $temp ;
