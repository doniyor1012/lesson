<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv elementlari
// orasida aniq 2 ta bir xil qiymatli element bor. Shu bir xil
// qiymatli elementlar indeksini chiqaruvchi programma tuzilsin.


// Massivni namuna sifatida yaratamiz
$elements = [3, 1, 4, 2, 5, 4, 6, 1, 7, 8];

// Massivning uzunligi
$n = count($elements);
$index = [];

// Har bir elementning indeksini tekshirish
for ($i = 0; $i < $n ; $i++) {
    for ($j = $i +1; $j < $n; $j++) {
        if ($elements[$i] == $elements[$j]) {
            $index[] = [$i, $j];
        }
    }
}

// Bir xil qiymatli elementlarning indeksini chiqarish
foreach ($index as $qiymat) {
    $index1 = $qiymat[0];
    $index2 = $qiymat[1];
    echo "Bir xil qiymatli elementlar indekslari: $index1 va $index2 \n";
}


