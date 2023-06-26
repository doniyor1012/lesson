<?php
//. n ta butun sonlardan iborat massiv berilgan. Massivdagi har bir juft sonni
// birinchi uchragan juft songa orttiruvchi programma tuzilsin.
// Agar juft sonlar bo’lmasa, massiv o’zgarishsiz qoldirilsin.
$a = [1, 2, 3, 4, 5];
$sum = false; // Juft son topilganligini tekshirish uchun
$n = count($a);

// Juft sonni birinchi uchragan juft songa orttirish
for ($i = 1; $i < $n; $i += 2) {
    if ($a[$i] % 2 == 0) {
        $a[$i] += 2;
        $sum = true;
        break;
    }
}
// Agar juft son topilmasa, massiv o'zgarishsiz qoldiriladi
if (!$sum) {
    echo "Juft sonlar mavjud emas. Massiv o'zgarishsiz qoldirildi.";
} else {
    echo "Yangilangan massiv: ";
    foreach ($a as $element) {
        echo $element . " ";
    }
}


