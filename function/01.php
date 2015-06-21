<?php
/**
 *Write an integer function Sign(X) that returns the following value:
−1,    if X < 0;        0,    if X = 0;        1,    if X > 0
(X is a real-valued parameter). Using this function, evaluate an expression Sign(A) + Sign(B) for given real numbers A and B.
 */
function  Sign(&$a, $x)
{
    $result = 0 ;
 if ($x < 0){
     $result = -1;
 }  elseif($x == 0){
     $result = 0;
 } else {
     $result = 1;
 }
    $a = $result;
    return $result;
}

$a = -10;
$b = -2;
$temp = 0 ;
$temp1 = 0 ;

$result = Sign($temp, $a) + Sign($temp1, $b);
var_dump($temp+$temp1);
var_dump($result);
echo "<div style='width: 100px;height: 100px;background-color: #32ff19'></div>";


