<?php
/**
 *  Даны три числа. Найти сумму двух наибольших из них.
 */
$a=4 ;
$b=2;
$c=3;
if($a>$b && $b>$c){
   $sum=$a+$b;
    echo $sum. ' sum of the nubers <br/>';
} elseif ($b>$a && $c>$a){
    $sum=$b+$c;
    echo $sum. ' sum of the numbers <br/>';
} elseif ($a>$b && $c>$b){
    $sum=$a+$c;
    echo$sum. ' sum of the numers <br/>';
}