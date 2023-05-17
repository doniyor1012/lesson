<?php
//Butun son berilgan. Agar, berilgan son musbat bo'lsa, 1 ga oshiring, agar
// manfiy bo'lsa 2 ga kamaytiring.
//  Hosil bo'lgan sonni ekranga chiqaruvchi programma tuzilsin.
$a=readline();
if ($a>0){
    $a++;
}elseif ($a<0){
    $a-=2;
}else{
    $a=10;
}
echo $a;