<?php
//a*x^2+b*x+c=0

$a=1;
$b=5;
$c=4;
$d = $b**2 - 4  * $a * $c;
if ($d > 0){
    $x1= (-$b - sqrt($d ))/ (2 * $a);
    $x2= (-$b + sqrt($d) )/ (2 * $a);
    echo "x1 = $x1 , x2 = $x2";
}elseif ($d == 0){
    $x = -$b / (2 * $a);
    echo "x = $x";
}else{
    echo "bo'sh to'plam";
}