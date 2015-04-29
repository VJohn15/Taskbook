<?php
/**
 * Даны три числа. Найти среднее из них (т. е. число, расположенное между наименьшим и наибольшим).
 *
 */
$a=1;
$b=2;
$c=3;
if ($a>$b)  {
    echo $b.' the middle number <br/>';
} elseif ($c>$b){
    echo $b. ' the middle number <br/>';
} elseif($b>$a){
    echo $a.' the middle number <br/>';
} elseif ($c>$a){
    echo $a. ' the middle number <br/>';
} elseif ($a>$c) {
    echo $c. ' the middle number <br/>';
} elseif ($b>$c){
    echo $c. ' the middle number <br/>';
}
