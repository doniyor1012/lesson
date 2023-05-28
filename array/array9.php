<?php
//nta elementdan tashkil topgan massiv berilgan. Massiv elementlari orasidan
// juftlarini indekslari kamayish tartibida chiqaruvchi va ularning sonini chiqaruvchi programma tuzilsin.
// Massiv elementlar: 4 5 7 8 6 9 Natija: 6 8 4 juftlar soni = 3

$n=[4,5,6,7,8,9,];
$son=[];
foreach ($n as $index  => $element){
    if ($index % 2 !=1){
       echo $element." ";
        $son[]=$element;
    }
}
$hisoblash= count($son);
echo "\n Juftlar soni= " .$hisoblash;