<?php
//N ta elementdan tashkil topgan massiv va K, L butun sonlari berilgan.
// (0 <= K <= L < N). Massivning K va L indekslari orasidagi elementlaridan
// tashqari elementlari yig’indisini chiqaruvchi programma tuzilsin

$array=[3,6,8,12,15,21,17]; //massiv elementlari
$n=count($array);  //massiv elementlar soni
$k=1;
$l=5;
$sum=0;
for ($i=0;$i<$n;$i++){
    if ($i<$k || $i>$l){
         $sum+=$array[$i];
    }
}
print_r($sum);