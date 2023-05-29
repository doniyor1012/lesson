<?php
//N ta elementdan tashkil topgan massiv va K, L butun sonlari berilgan.
// (0 <= K <= L < N). Massivning K va L indekslari orasidagi elementlarining
// o’rta arifmetigini chiqaruvchi programma tuzilsin.

$array=[12,4,8,21,6,9,15];
$n=count($array);
$k=1;
$l=5;
$sum=0;
for ($i=$k;$i<=$l;$i++){
    $sum+=$array[$i]/2;
}print_r($sum);