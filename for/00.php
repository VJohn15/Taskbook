<?php
/**
 *
 */
for ( $i = 1 ; $i < 10 ; $i++) {
    echo $i. ',';
}
echo '<hr/>';
for ( $i = 5 ; $i < 10 ; $i++) {
    echo $i. ',';
}
echo '<hr/>';
for ( $i = 10 ; $i > 1 ; $i--) {
    echo $i. ',';
}
echo '<hr/>';
for ( $i = 100 ; $i > 1 ; $i= $i - 10) {
    echo $i. ',';
}
echo '<hr/>';
for ( $i = 100; $i > 1 ; $i-= 10) {
    echo $i. ',';
}


echo '<hr/>';
$x = array(11,15,31,14,21,16,17,81,91);
foreach ($x as $t => $n) {
    //var_dump($t);
    var_dump($n);
}



for( $i = 0 ; $i < 5 ; $i ++) {
    for ( $j = 0 ; $j < 5 ; $j++){
        echo $j. ',';
    }
    echo $i . ', <br/>';
}