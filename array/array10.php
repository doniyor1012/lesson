<?php
//n ta elementdan tashkil topgan massiv berilgan. Dastlab massiv elementlari orasidan
// juftlarini indekslari o’sish tartibida chiqaruvchi, keyin massiv elementlari orasidan
// toqlarini indekslari kamayish tartibida chiqaruvchi programma tuzilsin.
// Massiv elementlar: 4 5 7 8 6 9 Natija: 4 8 6     9 7 5

$n=[4,5,6,7,8,9];
$juft=[];
$toq=[];
foreach ($n as $index  => $element){
    if ($index % 2 !=0){
        echo $element." ";
             $juft[] = $element;
    }

}
foreach (array_reverse($n) as $index => $element) {
    if ($index % 2 != 0) {
        echo $element . " ";
        $toq[] = $element;
    }
}
$res=array_merge($juft,$toq);
echo "\n natija= ". implode(" ",$res);
