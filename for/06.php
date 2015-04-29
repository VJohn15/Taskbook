<?php
/**
 * Given the price of 1 kg of sweets (as a real number), output the cost of 1.2, 1.4, …, 2 kg of these sweets.
 */
for ($n = 18; $n > 0; ) {
    $i = $n*1.2 ;
    echo $i.'-price of 1.2 kg of sweets <br/> ';
    $x= $n*1.4 ;
    echo $x.'-price of 1.4 kg of sweets <br/> ';
    $b = $n*1.6 ;
    echo $b.'-price of 1.6 kg of sweets <br/> ';
    $c = $n*1.8 ;
    echo $c.'-price of 1.8 kg of sweets <br/> ';
    $d = $n*2 ;
    echo $d.'-price of 2 kg of sweets <br/> ';
    break ;
}