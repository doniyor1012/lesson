<?php
//N ta elementdan tashkil topgan massiv va K, L butun sonlari berilgan.
// (0 <= K <= L < N). Massivning Kva L indekslari orasidagi elementlari
// yig’indisini chiqaruvchi programma tuzilsin.


$array = [2, 4, 6, 8, 10, 12, 14, 16, 18];  // Massiv elementlari
$n = count($array);  // Massivdagi elementlar soni
$k = 2;  // K indeksi
$l = 5;  // L indeksi
$sum = 0;
for ($i = $k; $i <= $l; $i++) {
    $sum += $array[$i];
}

echo "Indekslar orasidagi elementlar yig'indisi: " . $sum;


