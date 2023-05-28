<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv elementlari orasidan toqlarini
// indekslari o’sish tartibida chiqaruvchi va ularning sonini chiqaruvchi programma tuzilsin.
// Massiv elementlar: 4 5 7 8 6 9 Natija: 5 7 9 toqlar soni = 3

$n = array(4, 5, 7, 8, 6, 9); // Massiv elementlari
$son = array();
foreach ($n as $index => $element) {
    if ($index % 2 != 0) {
        echo $element . " ";
        $son[] = $element;
    }
}
// Toqlar soni
$hisoblash = count($son);
echo "\nToqlar soni = " . $hisoblash;

