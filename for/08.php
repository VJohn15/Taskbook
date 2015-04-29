<form method="post">


variabila a &nbsp;<input name='test1' placeholder="num" style="border-color: blue" />
<br/>
<br/>
variabila b &nbsp;<input name='test2'placeholder="num" style="border-color: red"/>



    <input type="submit" value="okay">
</form>





<?php
/**
 *Given two integers A and B (A < B), find the product of all integers in the range A to B inclusive.
 */
$prod = 1;
$a = 0;
$b = 1;
if (isset($_POST['test1'])){
    $a = $_POST['test1'];
}
if (isset($_POST['test2'])){
    $b = $_POST['test2'];
}
for ( $x = $a ; $x <= $b ; $x++ ) {
    $prod = $prod * $x ;
}
var_dump($prod) ;
