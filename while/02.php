<?php
/**
 *Two positive real numbers A and B (A > B) are given.
 * A segment of length A contains the greatest possible amount of segments of length B (without overlaps).
 * Not using multiplication and division, find the amount of segments B, which are placed on the segment A.
 */
$a = 10;
$b = 2;
while($b < $a){
    $x = $b + $b;
    if ($x >= $a){
        echo  '2 segments B is placed on segment A <br/>';
    }

    $y = $x + $b;
    if ( $y >= $a){
        echo  ' 3 segments B is placed on segment A<br/>';
    }
    $q = $y + $b ;
    if ( $q >= $a){
        echo ' 4 segments B is placed on segment A<br/>';

    }
        $z = $q + $b ;
    if ($z >= $a){
       echo '5 segments B is placed on segment A <br/>';
    }
    break;

}