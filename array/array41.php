<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv elementlari
// orasidan yig’indisi eng katta bo’ladigan 2 ta qo’shini elementni chiqaruvchi programma tuzilsin.


// Massivni namuna sifatida yaratamiz
$elements = [5, 2, 7, 4, 9, 1, 6, 3];

// Massivning uzunligi
$n = count($elements);

// Massivning elementlarini saralash
sort($elements);

// Massivning yig'indisi eng katta bo'lgan 2 ta qo'shini
$sum = $elements[$n - 1] + $elements[$n - 2];

// Natijani chiqarish
echo "Massivning yig'indisi eng katta bo'lgan 2 ta qo'shini: " . $sum;



