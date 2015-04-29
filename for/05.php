<?php
/**
 *Given the price of 1 kg of sweets (as a real number), output the cost of 0.1, 0.2, …, 1 kg of these sweets.
 */
for ($n = 14; $n > 0; ) {
    echo $n.'-price of 1 kg of sweets <br/> ';
    $i = $n*0.2 ;
    echo $i.'-price of 0.2 kg of sweets <br/> ';
    $x= $n*0.3 ;
    echo $x.'-price of 0.3 kg of sweets <br/> ';
    $b = $n*0.4 ;
    echo $b.'-price of 0.4 kg of sweets <br/> ';
    $c = $n*0.5 ;
    echo $c.'-price of 0.5 kg of sweets <br/> ';
    $d = $n*0.6 ;
    echo $d.'-price of 0.6 kg of sweets <br/> ';
    $e = $n*0.7 ;
    echo $e.'-price of 0.7 kg of sweets <br/> ';
    $f = $n*0.8 ;
    echo $f.'-price of 0.8 kg of sweets <br/> ';
    $g = $n*0.9 ;
    echo $g.'-price of 0.9 kg of sweets <br/> ';
    break ;
}