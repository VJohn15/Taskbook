<?php
/**
 * Two positive real numbers A and B (A > B) are given.
 * A segment of length A contains the greatest possible amount of segments of length B (without overlaps).
 * Not using multiplication and division, find the length of unused part of the segment A.
*/
$a = 10;
$b = 3;
while($b < $a){
    $x = $b + $b;
    if ($x > $a){
        $c = $a - $b ;
        echo $c. 'is length of unused part of the segment A <br/>';
    }

    $y = $x + $b;
    if ( $y > $a){
        $c = $a - $x ;
        echo  $c.'is length of unused part of the segment A<br/>';
    }
    $q = $y + $b ;
    if ( $q > $a){
        $c = $a - $y ;
        echo $c.' is length of unused part of the segment A <br/>';

    } break;

}