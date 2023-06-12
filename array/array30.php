<?php
// n ta elementdan tashkil topgan massiv berilgan. Massiv elementlari orasida,
// o’ng qo’shnisidan katta bo’lgan elementlarining indeksini o’sish tartibida
// chiqaruvchi va ularning sonini chiqaruvchi programma tuzilsin.
$n=[1,2,3,4,5,6,7,8];
$s=count($n);
$a=[];
for ($i=0; $i< $s - 1 ; $i++){
    if ($n[$i] > $n[$i+1]){
        $a[] = $n[$i];

    }
}
