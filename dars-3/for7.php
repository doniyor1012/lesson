<?php
// a va b butun sonlari berilgan (a < b). a dan b gacha bo’lgan
// barcha butun sonlar yig’indisini chiqaruvchi programma tuzilsin.

$a=1;
$b=4;
$sum=0;
for ($i=$a;$i<$b;$i++){
    $sum+=$i;
}echo $sum;