<?php
//n ta elementdan tashkil topgan massiv berilgan. Dastlab massiv elementlari
// orasidan juft indekslilarini keyin toq indekslilarini chiqaruvchi programma tuzilsin.
// A[0], A[2], A[4],... A[1], A[3], A[5],.... Shart operatori ishlatilmasin.
$n=[1,2,3,4,5,6,7,8,9,];

$son = array();
foreach ($n as $index => $element) {
    if ($element % 2 != 0) {
        echo $index . " ";
        $son[] = $index;
    }
}
// Toqlar soni
$hisoblash = count($son);
echo "\nToqlar soni = " . $hisoblash;



