<?php
/**
 *  An integer N (> 0) is given.
 * If it equals 3 raised to some integer power then output True, otherwise output False.
 */
$n = 9;
const a = 3;
while ( $n >= a){
    if ( pow(a , 1)== $n){
        echo 'It is true <br/>';
    } else {
        echo 'It is false <br/>';
    }  if (pow(a,2) == $n){
        echo 'It is true <br/>';
    } else {
        echo ' It is false <br/>';
    } if (pow(a,3)== $n){
        echo 'It is true <br/>';
    } else {
        echo 'It is false <br/>';
    }
    break;
}