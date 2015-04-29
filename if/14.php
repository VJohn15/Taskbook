<?php
/**
 *  Даны три числа. Вывести вначале наименьшее, а затем наибольшее из данных чисел.
 */
$a=1;
$b=2;
$c=3;
if ($a>$b){
    echo $b. ' the smoller number';
} elseif ($a > $c){
    echo $c.' the smoller number <br/>';
} elseif ($b>$a){
    echo $a. ' the smoller number <br/>';
} elseif ($b>$c){
    echo $c. ' the smoller number <br/>';
} elseif ($c>$b){
    echo $b. ' the smoller number <br/>';
} elseif ($c>$a){
    echo $a.' the smoller number <br/>';
}
 if ($a<$b){
     echo $b. ' the highest numbet <br/>';
 } elseif ($a <$c){
     echo $c. ' the highest number <br/>';
 } elseif ($b<$a){
     echo $a. ' the highest number <br/>';
 } elseif ($b<$c){
     echo $c. ' the highest number <br/> ';
 } elseif ($c<$b){
     echo $b. ' the highest number <br/.';
 } elseif ($c<$a){
     echo $a. ' the highest number <br/>';
 }