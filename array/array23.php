<?php
//N ta elementdan tashkil topgan massiv va K, L butun sonlari berilgan.
// (0 <= K <= L < N). Massivning K va L indekslari orasidagi elementlaridan
// tashqari elementlarining o’rta arifmetigini chiqaruvchi programma tuzilsin.

$array=[1,4,6,8,9,12,17];
$n=count($array);
$k=1;
$l=4;
$sum=0;
for ($i=0;$i<$n;$i++){
    if ($i<$k || $i>$l){
        $sum+=$array[$i]/2;
    }
}print_r("o'rta arifmetigi = ".$sum);