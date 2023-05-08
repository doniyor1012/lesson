<?php
//Nolga teng bo'Imagan ikkita son berilgan.
// Ularning yig'indisini, ko’paytmasini va har birining moduli aniqlansin.
$a = 10;
$b = -10;


if ($a!=0 && $b!=0){
    echo $a+$b." ";
    echo $a*$b." ";
    echo $a*$a." ";
    echo abs($a) ;
    echo abs($b) ;
}
else{
    echo "a va b sonlar nolga teng bo'lmasligi kerak";
}
?>