<?php
//. A, V, S koeffisentlari berilgan,   Ax2+Bx+C = 0
//   kvadrat tenglamaning diskriminanti noldan katta bo'lsa uning yechimlarini aniqlaydigan programma tuzilsin.
//)    x1,2 =( -B ± 𝐷)/2  , D = B 2 – 4 A C
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