<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv elementlari
// orasidan o’ng qo’shnisidan katta bo’lganlar sonini chiqaruvchi programma tuzilsin.

$n = [5, 2, 8, 4, 9, 1, 7, 3];
//massiv uznligi
$x = count($n);
// O'ng qo'shnisidan katta bo'lgan elementlar sonini hisoblash
$count = 0;
$katta = $n[$x -1];

for ($i = 0; $i < $x; $i++) {
    if ($n[$i] > $katta) {
        $count++;

    }
}
echo "O'ng qo'shnisidan katta bo'lgan elementlar soni: $count";



