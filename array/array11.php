<?php
//n ta elementdan tashkil topgan massiv va K butun soni berilgan
// (1 <= K < n). Massiv elementlari orasidan indeksi K ga karralilarini
// chiqaruvchi programma tuzilsin. Ak, A2k, A3k, .... Shart operatori ishlatilmasin.


$array = array(1,2,3,4,5,6,7,8,9,10,11) ;// Massiv elementlari
$K = 2; // K indeksi

$index = $K;
while ($index < count($array)) {
    echo $array[$index] . " ";
    $index += $K;
}

